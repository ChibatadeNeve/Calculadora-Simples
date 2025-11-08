Calculadora Simples
📋 Descrição do Projeto

Sistema web de calculadora online desenvolvido em PHP, HTML e CSS.
A aplicação permite realizar operações matemáticas básicas de forma prática, rápida e responsiva.
O objetivo deste projeto é demonstrar a integração entre front-end e back-end utilizando o PHP para processar os cálculos enviados através de um formulário HTML.

Este projeto é ideal para iniciantes em programação web que desejam entender como funciona o envio de dados via formulário (POST) e o processamento desses dados no servidor.

✨ Funcionalidades

✅ Realizar soma entre dois números
✅ Realizar subtração entre dois números
✅ Realizar multiplicação entre dois números
✅ Realizar divisão, com tratamento de erro para divisão por zero
✅ Calcular porcentagem
✅ Exibir o resultado automaticamente após o envio do formulário
✅ Interface simples, moderna e centralizada

🎨 Interface e Design

A interface foi desenvolvida em CSS3 com:

Fundo com degradê preto e verde neon

Caixa principal com bordas arredondadas e sombra suave

Botões com efeito hover

Campos de entrada com realce ao foco (focus)

Layout responsivo e minimalista

🛠️ Tecnologias Utilizadas

HTML5 → Estrutura da página

CSS3 → Estilização e layout

PHP 7.4+ → Lógica de processamento dos cálculos

XAMPP → Ambiente de desenvolvimento local

📁 Estrutura do Projeto
calculadora-simples/
│
├── IMG/
│   └── calculadora.png      # Ícone usado como favicon
│
├── index.php                # Código principal do sistema (HTML + CSS + PHP)
└── README.md                # Documentação do projeto

⚙️ Requisitos do Sistema

XAMPP instalado (com Apache ativo)

PHP 7.4 ou superior

Navegador web moderno (Chrome, Edge, Firefox, etc.)

🚀 Instalação e Execução
🔧 1. Preparação do Ambiente

Instale o XAMPP, se ainda não tiver.

Inicie o Apache pelo painel de controle do XAMPP.

📂 2. Configuração do Projeto

Extraia os arquivos do projeto (caso estejam compactados).

Copie a pasta calculadora-simples para o diretório:

C:\xampp\htdocs\


Certifique-se de que o arquivo principal se chama index.php.

🌐 3. Executando o Projeto

Abra o navegador e acesse:

http://localhost/calculadora-simples/


Insira dois números, escolha a operação e clique em Calcular.

O resultado aparecerá automaticamente na tela.

🧠 Como o Sistema Funciona

O usuário insere dois números e escolhe a operação desejada.

Ao clicar em Calcular, o formulário envia os dados para a mesma página via método POST.

O PHP processa os dados usando uma estrutura switch e exibe o resultado abaixo do formulário.

Caso o usuário tente dividir por zero, o sistema retorna uma mensagem de erro personalizada.

🧩 Principais Aprendizados

Uso do método POST para envio de formulários

Estruturas condicionais e switch no PHP

Conversão de valores com floatval()

Exibição dinâmica de resultados

Criação de interface simples e interativa

👨‍💻 Desenvolvedor

Pietro Miguel
Sistema desenvolvido como projeto didático para prática de PHP, HTML e CSS.

📞 Suporte

Em caso de dúvidas ou erros:

Verifique se o Apache está ativo no XAMPP

Confirme se a pasta está dentro do htdocs

Certifique-se de que o arquivo principal é index.php

⭐ Contribua

Se este projeto te ajudou a aprender PHP ou HTML/CSS, deixe uma estrela ⭐ no repositório e compartilhe com outros desenvolvedores iniciantes!
