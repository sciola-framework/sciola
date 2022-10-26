<div align="center"><img src="https://github.com/sciola-git/sciola-git.github.io/blob/main/images/brands/sciola_framework.svg?raw=true" /></div>

### PHP framework (Project under development)

### Requirements:

- Apache2 | https://httpd.apache.org
- Composer | https://getcomposer.org
- NPM | https://www.npmjs.com
- PHP 7++ | https://www.php.net
- DBMS - (Data Base Management System) | https://en.wikipedia.org/wiki/Database

---

## <div align="center">Reference</div>

> <img src="https://github.com/sciola-git/sciola-git.github.io/blob/main/images/icons/folder.svg?raw=true" width="60px" align="center" /> [config](#-config)
>
> <img src="https://github.com/sciola-git/sciola-git.github.io/blob/main/images/icons/folder.svg?raw=true" width="60px" align="center" /> [database](#-database)
>
> <img src="https://github.com/sciola-git/sciola-git.github.io/blob/main/images/icons/folder.svg?raw=true" width="60px" align="center" /> [languages](#-languages)
>

---

### <img src="https://github.com/sciola-git/sciola-git.github.io/blob/main/images/icons/folder.svg?raw=true" width="60px" align="center" /> config

---

In this directory are the application's configuration files.

> **Note** *In production change the **DEV_MODE** option in the file: **constant.ini***
```ini
DEV_MODE = true
```
*to*
```ini
DEV_MODE = false
```

---

### <img src="https://github.com/sciola-git/sciola-git.github.io/blob/main/images/icons/folder.svg?raw=true" width="60px" align="center" /> database

---

In this directory are the application's configuration files.

> **Note** *In production change the **DEV_MODE** option in the file: **constant.ini***
```ini
DEV_MODE = true
```
*to*
```ini
DEV_MODE = false
```


---

### <img src="https://github.com/sciola-git/sciola-git.github.io/blob/main/images/icons/folder.svg?raw=true" width="60px" align="center" /> languages

---

In this directory are the translation files of your application and the routes.

> **Note** *The translated text must have the same index in all translation files. Example:*


### Text translation

File: **en/app.json**

```json
{
  "A0001" : "Hello World!",
  "A0002" : "Welcome",
  "A0003" : ""
}
```

File: **pt-BR/app.json**

```json
{
  "A0001" : "Olá Mundo!",
  "A0002" : "Bem-vindo",
  "A0003" : ""
}
```

### Route translation

File: **en/routes.json**

```json
{
  "A0001" : "products-and-services",
  "A0002" : "virtual-store",
  "A0003" : "contact"
}
```

File: **pt-BR/routes.json**

```json
{
  "A0001" : "produtos-e-servicos",
  "A0002" : "loja-virtual",
  "A0003" : "contato"
}
```

> **Note** *You will be able to rename the files and create others with custom names according to the context of your application. Example:*

File: **en/system.json**

File: **en/system-routes.json**

File: **en/website.json**

File: **en/website-routes.json**

<br>

File: **pt-BR/system.json**

File: **pt-BR/system-routes.json**

File: **pt-BR/website.json**

File: **pt-BR/website-routes.json**

---
