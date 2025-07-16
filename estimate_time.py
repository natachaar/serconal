import subprocess
import re

# Configuración de tiempos según la categoría de esfuerzo
EFFORT_LEVELS = {
    "bajo": 0.2,
    "medio": 0.5,
    "alto": 1.0,
}

def get_latest_commit():
    """Obtiene el hash del último commit."""
    return subprocess.check_output(["git", "rev-parse", "HEAD"]).decode().strip()

def get_commit_message():
    """Obtiene el mensaje del último commit."""
    return subprocess.check_output(["git", "log", "-1", "--pretty=%B"]).decode().strip()

def extract_effort_from_message(commit_message):
    """Extrae el esfuerzo del mensaje del commit."""
    for level in EFFORT_LEVELS.keys():
        if f"[{level.lower()}]" in commit_message.lower():
            return level
    return None  # Si no se encuentra un esfuerzo válido

def get_commit_changes():
    """Obtiene el número de líneas añadidas y eliminadas en el último commit."""
    try:
        diff_output = subprocess.check_output(["git", "diff", "--numstat", "HEAD~1", "HEAD"]).decode().strip()
        
        # Sumar todas las líneas insertadas y eliminadas
        insertions, deletions = 0, 0
        for line in diff_output.split("\n"):
            numbers = re.findall(r"\d+", line)
            if len(numbers) >= 2:
                insertions += int(numbers[0])
                deletions += int(numbers[1])

        total_lines_changed = insertions + deletions
        return insertions, deletions, total_lines_changed
    except subprocess.CalledProcessError:
        print("::warning:: ⚠️ No se pudo obtener el diff del commit.", flush=True)
        return 0, 0, 0

def estimate_time(lines_changed, effort_level):
    """Calcula el tiempo estimado basado en la cantidad de líneas y el esfuerzo extraído del commit."""
    time_per_line = EFFORT_LEVELS.get(effort_level, 0.5)  # Default a 0.5 si no se encuentra
    estimated_time = lines_changed * time_per_line
    return estimated_time

def format_time_minutes(minutes):
    """Convierte minutos a formato Xh Ym"""
    hours = int(minutes // 60)
    mins = int(minutes % 60)
    if hours > 0:
        return f"{hours}h {mins}min"
    else:
        return f"{mins}min"

def main():
    """Ejecuta la lógica para estimar el tiempo de trabajo del último commit."""
    commit = get_latest_commit()
    commit_message = get_commit_message()
    effort_level = extract_effort_from_message(commit_message)

    if not effort_level:
        print("::warning:: ⚠️ No se encontró una categoría de esfuerzo en el commit. Usando esfuerzo por defecto: Medio", flush=True)
        effort_level = "Medio"

    insertions, deletions, total_lines_changed = get_commit_changes()
    estimated_time = estimate_time(total_lines_changed, effort_level)
    formatted_time = format_time_minutes(estimated_time)

    # 🔥 Mensaje Formateado para GitHub Actions
    formatted_message = (
        f"🔹 **Commit:** `{commit}`\n"
        f"📌 **Mensaje:** `{commit_message}`\n"
        f"📈 **Líneas añadidas:** `{insertions}`\n"
        f"📉 **Líneas eliminadas:** `{deletions}`\n"
        f"🔄 **Total líneas modificadas:** `{total_lines_changed}`\n"
        f"🛠 **Clasificación de esfuerzo:** `{effort_level}`\n"
        f"⏳ **Tiempo estimado:** `{formatted_time}`"
    ).replace("\n", "%0A")  # 🔥 Reemplazar saltos de línea para GitHub Actions

    # 🔹 Mostrar como anotación con formato correcto
    print(f"::notice title=Estimación de Tiempo::{formatted_message}", flush=True)

if __name__ == "__main__":
    main()
