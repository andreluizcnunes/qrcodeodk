from base64 import b64encode
import codecs
import json
import segno
import zlib

url = "arquivo.json"

with open(url, "r") as arquivo:
    settings = json.load(arquivo)

qr_data = b64encode(zlib.compress(json.dumps(settings).encode("utf-8")))

code = segno.make(qr_data, micro=False)
code.save('settings.png', scale=5)