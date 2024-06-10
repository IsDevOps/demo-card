pipeline{
    agent any 
    
    stages{
        stage('Install dependencies') {
            steps {
                sh 'composer install --prefer-dist --no-dev'
                sh 'php artisan encore prod'
            }
        }        
        stage('Create Archive') {
            steps {
                sh 'tar -zcvf application.tar.gz public app bootstrap config vendor'
            }
        }
        stage('Unit tests') {
            steps {
                sh './vendor/bin/phpunit tests'
            }
        }
        }
    }
