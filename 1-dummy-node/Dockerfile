# Cada um dos comandos gera uma camada com cache própria
FROM node:14

# Definição do diretorio da aplicação
WORKDIR /app

COPY package*.json .

RUN npm install

# Copia tudo que eu tenho para o container
COPY . .

EXPOSE 3000

# Inicializando a aplicação
CMD ["node", "app.js"]
