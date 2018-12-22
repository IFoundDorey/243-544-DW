import sys
import time
import RPi.GPIO as GPIO

var = sys.argv[1]

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(17,GPIO.OUT)

if var == 'ON':
  GPIO.output(17,GPIO.HIGH)
elif var == 'OFF':
  GPIO.output(17,GPIO.LOW)
else:
  time.sleep(3)
