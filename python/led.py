from sys import argv
script, posicion = argv

import RPi.GPIO as GPIO #Libreria Python GPIO
import time #Libreria Time
GPIO.setmode(GPIO.BCM) #Establecemos el sisetma de numeracion de pins BCM
GPIO.setup(4, GPIO.OUT) #Ponemos el Pin GPIO4 como salida
 
for i in range(3):
    print"ON"
    GPIO.output(4, GPIO.HIGH)
    time.sleep(1)
    print"OFF"
    GPIO.output(4, GPIO.LOW)
    time.sleep(1)
print "posicion %s"%( posicion)
GPIO.cleanup() #Reiniciar configuracion pins GPIO