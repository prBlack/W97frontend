
import numpy as np
import cv2


cap = cv2.VideoCapture("rtsp://dudka:124365@192.168.1.6:554/cam/realmonitor?channel=11&subtype=0")

for i in range(30):
    cap.read()

ret, frame = cap.read()

cv2.imwrite('/var/www/html/weewx/cam.png', frame)   

cap.release()


