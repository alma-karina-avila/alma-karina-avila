# InternationalizaciÃ³n (i18n) en PHP

Lo que te sugerÃ­ suele conocerse por varios nombres, dependiendo del contexto.

## 1. Internationalization (i18n)

Es el tÃ©rmino mÃ¡s comÃºn.

- **i18n** = *Internationalization*
- El "18" representa las 18 letras entre la "i" y la "n".

Ejemplo:

```php
echo t('about.title');
echo t('menu.contact');
```

y los textos estÃ¡n en archivos de idioma.

---

## 2. Localization (l10n)

Es la parte que adapta el contenido a cada idioma o regiÃ³n.

Por ejemplo:

```txt
es-MX
es-ES
en-US
en-GB
```

El sistema carga el archivo correspondiente.

---

## 3. Language Files Pattern

Cuando utilizas archivos como:

```txt
/lang
    es.php
    en.php
    fr.php
```

con:

```php
return [
    'home' => 'Inicio',
    'contact' => 'Contacto'
];
```

se le suele llamar:

- Language Files
- Translation Files
- Resource Files

---

## 4. Front Controller + Translation Files

En aplicaciones mÃ¡s modernas:

```txt
/es/nosotros
/en/about
```

todo pasa por un Ãºnico:

```txt
index.php
```

que:

1. Detecta idioma.
2. Carga traducciones.
3. Carga la vista.

Esto es bÃ¡sicamente lo que hacen frameworks como:

- Laravel
- Symfony
- CodeIgniter
- Yii

---

## Ejemplo profesional

```txt
/
â”œâ”€â”€ lang/
â”‚   â”œâ”€â”€ es.php
â”‚   â””â”€â”€ en.php
â”‚
â”œâ”€â”€ views/
â”‚   â”œâ”€â”€ home.php
â”‚   â”œâ”€â”€ about.php
â”‚   â””â”€â”€ services.php
â”‚
â”œâ”€â”€ index.php
â””â”€â”€ .htaccess
```

URL:

```txt
/es/about
/en/about
```

Archivo de idioma:

```php
$lang['about_title'] = 'Sobre Nosotros';
```

Vista:

```php
<h1><?= t('about_title') ?></h1>
```

Este patrÃ³n suele describirse como:

> **PHP Internationalization (i18n) using translation files and URL-based language routing.**

Es una soluciÃ³n muy utilizada porque mantiene una sola copia del HTML y de la lÃ³gica, cambiando Ãºnicamente los textos segÃºn el idioma.
