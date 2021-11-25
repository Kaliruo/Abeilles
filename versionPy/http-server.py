#coding:utf-8
import http.server

port = 80
adress = ("", port)

server = http.server.HTTPServer

handler = http.server.CGIHTTPRequestHandler
handler.cgi_directories = ["/"]

httpd = server(adress, handler)

print("Serveur a correctement démarré sur le PORT ",port)

httpd.serve_forever()