import cv2
#import numpy as np
img1 = cv2.imread('C:\\Users\\rushi\\OneDrive\\Pictures\\ing.jpeg',1);
img2 = cv2.resize(img1,(700,400));
img3  =cv2.flip(img2,1)
img4 = cv2.imshow("Nature",img3);
cv2.waitKey(0);
cv2.destroyAllWindows();

