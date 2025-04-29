# Mercado Delivery PWA

## Sobre o Projeto
Uma aplicação web progressiva (PWA) para delivery de mercado, desenvolvida com PHP moderno e práticas de segurança avançadas.

## Características Principais

### Segurança
- Sanitização avançada de inputs com múltiplas camadas de proteção
- Validação de dados com suporte a tipos personalizados
- Proteção contra XSS, CSRF e injeção de SQL
- Normalização Unicode para prevenção de ataques
- Limitação de tamanho de strings para prevenção de DoS

### Funcionalidades
- Sistema de carrinho de compras com notificações sonoras
- Integração com MercadoPago
- Sistema de notificações
- Gestão de múltiplas lojas
- Painel administrativo
- Newsletter
- Sistema de avaliações
- Landing pages personalizáveis

### PWA Features
- Service Worker para funcionamento offline
- Manifesto para instalação como aplicativo
- Cache estratégico de assets
- Notificações push

## Estrutura do Projeto
```
├── _app/                  # Core da aplicação
│   ├── Config.inc.php     # Configurações principais
│   ├── Models/            # Modelos de dados
│   └── Router.php         # Sistema de rotas
├── admin/                 # Painel administrativo
├── assets/               # Recursos estáticos
├── src/                  # Código fonte principal
│   └── Core/             # Classes principais
├── vendor/               # Dependências
└── service-worker.js     # Service Worker PWA
```

## Requisitos
- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Composer
- SSL/HTTPS para funcionalidades PWA

## Instalação

### Método 1: Instalação Manual

1. Clone o repositório:
```bash
git clone [url-do-repositorio]
```

2. Instale as dependências:
```bash
composer install
```

3. Configure o ambiente:
- Copie `.env.example` para `.env`
- Configure as variáveis de ambiente
- Configure o banco de dados

4. Configure o servidor web:
- Aponte o document root para a pasta raiz do projeto
- Habilite o mod_rewrite para Apache
- Configure HTTPS

### Método 2: Instalação via cPanel/EasyPanel

1. Preparação dos Arquivos:
- Baixe o código fonte do projeto
- Compacte todos os arquivos em um arquivo ZIP

2. Upload via Painel:
- Acesse seu cPanel/EasyPanel
- Vá para o Gerenciador de Arquivos
- Navegue até a pasta public_html ou a pasta do seu domínio
- Faça upload do arquivo ZIP
- Extraia o arquivo no diretório

3. Configuração do Banco de Dados:
- Acesse o MySQL Databases no painel
- Crie um novo banco de dados
- Crie um usuário e atribua ao banco de dados
- Anote as credenciais para uso posterior

4. Configuração do Ambiente:
- Renomeie o arquivo `.env.example` para `.env`
- Edite o arquivo `.env` com as credenciais do banco de dados
- Configure as demais variáveis de ambiente necessárias

5. Instalação de Dependências:
- Acesse o terminal SSH (se disponível)
- Navegue até a pasta do projeto
- Execute `composer install`
- Se SSH não estiver disponível, faça upload manual das dependências

6. Configurações Finais:
- Configure o domínio/subdomínio no painel
- Ative o SSL/HTTPS através do painel
- Verifique as permissões dos diretórios (755 para pastas, 644 para arquivos)
- Configure o PHP para versão 7.4 ou superior
- Ative o mod_rewrite no Apache através do painel

## Deploy

### Preparação
1. Otimize o autoloader:
```bash
composer install --optimize-autoloader --no-dev
```

2. Configure o ambiente de produção:
- Defina `APP_ENV=production` no `.env`
- Desative debug e logs detalhados
- Configure os limites de memória adequadamente

### Upload
1. Faça upload dos arquivos via FTP/SFTP
2. Mantenha permissões corretas:
   - 755 para diretórios
   - 644 para arquivos
   - 775 para diretórios de cache/upload

### Configuração do Servidor
1. Configure o servidor web:
```apache
<VirtualHost *:80>
    ServerName seu-dominio.com
    DocumentRoot /path/to/project
    
    <Directory /path/to/project>
        AllowOverride All
        Require all granted
    </Directory>
    
    # Redirecionamento para HTTPS
    RewriteEngine On
    RewriteCond %{HTTPS} off
    RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
</VirtualHost>
```

2. Configure SSL/HTTPS
3. Configure o PHP:
   - memory_limit = 256M
   - upload_max_filesize = 10M
   - post_max_size = 10M

### Pós-Deploy
1. Limpe os caches:
   - Cache do aplicativo
   - Cache do navegador
   - Cache do OPcode

2. Verifique:
   - Logs de erro
   - Performance
   - Funcionalidades PWA
   - Integrações de pagamento

## Manutenção

### Backups
- Configure backups automáticos do banco de dados
- Mantenha backups dos arquivos de upload
- Documente alterações e atualizações

### Monitoramento
- Configure alertas de erro
- Monitore uso de recursos
- Acompanhe métricas de performance

## Suporte

Para suporte e dúvidas, entre em contato através dos canais:
- Email: [email-de-suporte]
- Telefone: [telefone-de-suporte]

## Licença
[Tipo de Licença] - Veja o arquivo LICENSE para detalhes.
