from sys import argv

script, posicion = argv

import RPi.GPIO as GPIO    #Importamos la libreria RPi.GPIO
import time                #Importamos time para poder usar time.sleep
#from sys import argv       #Guardo   

import RPi.GPIO as GPIO    #Importamos la libreria RPi.GPIO
import time                #Importamos time para poder usar time.sleep

GPIO.setmode(GPIO.BCM)   #Ponemos la Raspberry en modo BOARD
GPIO.setwarnings(False)
GPIO.setup(21,GPIO.OUT)    #Ponemos el pin 21 como salida
p = GPIO.PWM(21,50)        #Ponemos el pin 21 en modo PWM y enviamos 50 pulsos $
p.start(8.2)               #Enviamos un pulso del 7.5% para centrar el servo
print "Es el parametro: %s"%(posicion)
p.ChangeDutyCycle(float(posicion))
time.sleep(0.5)
p.stop()                      #Detenemos el servo
GPIO.cleanup()                #Limpiamos los pines GPIO de la Raspberry y cerra$

