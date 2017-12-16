import RPi.GPIO as GPIO
import time
import requests

url = 'https://mousetrap.aedev.me/trapped.php'
payload = {'triggered': 'false'}

r = requests.get(url, params=payload)

sendonce = 0

GPIO.setmode(GPIO.BCM)

GPIO.setup(18, GPIO.IN, pull_up_down=GPIO.PUD_UP)

print('Mouse trap activated!')

while True:
    input_state = GPIO.input(18)
    if input_state == True:
	if sendonce == 0:
		sendonce = 1
		payload = {'triggered': 'true'}
		r = requests.get(url, params=payload)
        	print('Mouse Caught')
    else:
	if sendonce == 1:
		sendonce = 0
		payload = {'triggered': 'false'}
                r = requests.get(url, params=payload)
		print('Trap Activated')

