import json
from datetime import datetime
file = open("datos.json", "r")
contenido = file.read()
now = str(datetime.now())
js = json.loads(contenido)
for x in js:
    x.update({"fecha": now})
