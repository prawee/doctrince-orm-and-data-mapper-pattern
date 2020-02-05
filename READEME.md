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