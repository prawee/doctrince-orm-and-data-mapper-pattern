Initial Project
===============

## Clone Project

```bash
git clone https://github.com/prawee/doctrince-orm-and-data-mapper-pattern.git doctrine
cd doctrine
composer install
```

## Running entities

### Checking command
```bash
php vendor/bin/doctrine
```

### Checking info
```bash
php vendor/bin/doctrine orm:info
```

```bash
Found 2 mapped entities:
[OK]   entities\Post
[OK]   entities\Author
```

### Generate entities (Getter and Setter)

```bash
php vendor/bin/doctrine orm:generate-entities .
```

```bash
Processing entity "entities\Post"
Processing entity "entities\Author"                                                                                                    
[OK] Entity classes generated to "/private/var/www/doctrine"
```

## Generate db schema

```bash
php vendor/bin/doctrine orm:schema-tool:update --force
```

```bash
Updating database schema...
3 queries were executed                                                                                                    
[OK] Database schema updated successfully! 
```

## Running

```bash
php -S localhost:8080
```
