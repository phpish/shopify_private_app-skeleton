```
git clone --depth 1 --branch master https://github.com/phpish/shopify_private_app-skeleton.git new_prj
cd new_prj
rm -rf .git
rm README.md
curl -sS https://getcomposer.org/installer | php
php composer.phar install
```

1. [Create a private app](http://docs.shopify.com/api/authentication/creating-a-private-app).
2. Update conf.php with the private app's credentials.
4. Check out the .php files and see how they work. (e.g., http://path-to-new_prj/get_shop.php)