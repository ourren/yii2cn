## about yii2cn

yii2cn is based on the yii2 advanced application, but add some basic functions for Chinese projects. So it is easy for you to start a new project.

## todo

1. Chinese UI and setting (frontend and backend);
2. user could login with weibo/qq;
3. send email and need to activate after register
4. reset password by send email link;
5. .... 

## directory


```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```


## install

1)update the library;
	
	composer update
	
2)init enviroment for your project;
	
	./init
	
3)config database in /common/config/mail-local.php;

4)import your the init sql;

	./yii migrate

 