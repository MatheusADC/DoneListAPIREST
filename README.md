# <img src="https://github.com/user-attachments/assets/caabfdf0-0f9e-44a3-8200-c6579fe87887" alt="Ícone de descrição" width="28"> Descrição
Um site que exibe tarefas pendentes e concluídas. A API exibe uma lista de tarefas no formato JSON através da utilização do serviço API Gateway da AWS integrado com uma Função Lambda.

# <sub><img src="https://img.icons8.com/?size=100&id=L3V7IDcwKTn2&format=png&color=000000" alt="Ícone de tarefa" width="36"></sub> Página
![image](https://github.com/user-attachments/assets/d3c4e307-4212-41c4-904e-efd219fa9190)

# <sub><img src="https://img.icons8.com/?size=100&id=33039&format=png&color=000000" alt="Ícone da AWS" width="38"></sub> Configuração do AWS
### Instalação do Apache, do PHP e inicialização do serviço
```
sudo yum update -y
```
```
sudo yum install -y httpd php
```
```
sudo systemctl start httpd
```
```
sudo systemctl enable httpd
```
```
sudo chown -R ec2-user:apache /var/www/html
```
```
sudo chmod -R 755 /var/www/html
```

# <img src="https://img.icons8.com/?size=100&id=duiaqXXFFuge&format=png&color=000000" alt="Ícone do PuTTy" width="32"> Transferência dos arquivos via PuTTy
### Arquivo de Tarefas
```
sudo nano /var/www/html/tarefas.php
```
### Index
```
sudo nano /var/www/html/index.php
```
### Arquivo de estilo
```
sudo mkdir /var/www/html/css
```
```
sudo nano /var/www/html/css/style.css
```
