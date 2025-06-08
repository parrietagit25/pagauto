import requests
import datetime
from requests.auth import HTTPBasicAuth

today = datetime.date.today().strftime("%Y-%m-%d")

api_url = f"https://cq1e.barscloud.com:612/dolPanamaRW/queryapi/apiReservasDateOut.mf?dtsdate={today}&dtedate={today}"
username = "dolPanamaRW"
password = "VfsbJpYp"

php_url = "https://automarketpanama.com/api/insert_reserva.php"

try:
    response = requests.get(api_url, auth=HTTPBasicAuth(username, password), verify=False)
    response.raise_for_status()
    
    json_response = response.json()
    print("Respuesta completa de la API:", json_response)

    if "data" in json_response:  
        reservas = json_response["data"]
    else:
        print("Error: La API no devolvió datos en la clave esperada 'data'.")
        exit()

    for item in reservas:
        print("Enviando registro:", item)  
        res = requests.post(php_url, json=item)
        print("Respuesta PHP:", res.json())  

except requests.exceptions.RequestException as e:
    print(f"Error al obtener datos del API: {e}")