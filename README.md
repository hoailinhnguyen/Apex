<p align="center"><a href="https://laravel.com" target="_blank">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Everything that you need](https://laravel.com/docs/8.x).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Development requirement

- PHP version ^7.2.5 | ^8.0
- Composer
- yarn | npm
- MySQL ^5.6
- Git

## How to start development

1. Checkout `origin/develop` branch
2. Install package
- `composer install`
- `yarn` | `npm install`
3. Clone env file:
`cp .env.example .env`
4. Create your own DB
5. Change DB info in `.env` file:
- DB_CONNECTION=mysql
- DB_HOST=
- DB_PORT=
- DB_DATABASE=
- DB_USERNAME=
- DB_PASSWORD=
6. Clear cache: `php artisan optimize && php artisan config:cache`
7. Run migrate: `php aritsan migrate`
8. Seed data: `php artisan db:seed --class=DatabaseSeeder`
9. Start API: `php artisan serve`
10. Start UI/CMS: 
- Open new terminal tab
- Run `yarn watch` | `npm run watch`
11. Access `http://127.0.0.1:8000` from your browser and start developing
12. LoginID to login to `http://127.0.0.1:8000/admin` can be found in `admins` table on your DB, default password is `password` 
- Note: you have to run both PHP server and `watch` command to be able to use this app

## Prepare deploy
1. Download env file on `secrets` folder and pem file on `servers info` from https://gumivn.backlog.com/file/JTB
2. Leave your .pem file here `deploy/ec2-keys`, `deploy` folder has the same level with `app` folder
3. Leave your .env file here `deploy/secrets`

## Deploy development
1. Checkout `origin/feature/#setup_deploy` branch
2. Merge `origin/develop` branch to this branch then push it up
3. Run command `php vendor/bin/dep deploy development`

## Deploy staging
1. Checkout `origin/staging` branch
2. Merge `origin/develop` branch to this branch then push it up
3. Run command `php vendor/bin/dep deploy staging`

## Release
1. Create new release version from `origin/develop`, for example: `origin/releases/vx.x`
2. Push release branch up then checkout `origin/production`
3. Merger release branch which just created before to `origin/production` then push it up
4. Run command `php vendor/bin/dep deploy production`
5. If any problem happens:
- Checkout `origin/releases/vx.x` then create a hotfix named `origin/hotfix/vx.x`
- After the fix merge back `origin/hotfix/vx.x` to `origin/releases/vx.x`
- Repeat step 2
6. When finish release:
- Checkout `origin/releases/vx.x`
- Do the `Finish current` (git flow) and create TAG name with same name `vx.x`
