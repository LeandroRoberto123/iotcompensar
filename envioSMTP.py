import smtplib
import time
from email.mime.text import MIMEText

# if value >= 15:
print("temperatura muy alta")
#creando instacia del objeto del mensaje
msg = MIMEText("La  temperatura es muy alta ")
#  else:
#   print("temperatura muy baja, envaindo mail  ")
#   msg=MIMEText("La  temperatura es muy baja")
server = smtplib.SMTP('smtp.gmail.com',
                      587)  # definir servidor de correo y puerto
server.starttls()  #protocolo ttls
server.login('iotucompensar60@gmail.com', 'gqudjropstkkebdf')  #autenticación
msg['Subject'] = "Aviso de Iot Unipanamericana TEST"
server.sendmail("iotucompensar60@gmail.com", "leandroroberto696@gmail.com",
                msg.as_string())
print("Email enviado")
server.quit()
time.sleep(60)