# Installation

1. Run `composer install`
2. Update DB credentials, if necessary, here: `partials/config.php`
3. Run `sudo npm install -g npm@latest` then `sudo npm install -g sass`
4. One-time Compilation: `sass assets/scss/main.scss:assets/css/style.css --style=compressed`

## Using npm Scripts
```
# One-time compilation
npm run sass

# Watch for changes
npm run sass:watch
```
