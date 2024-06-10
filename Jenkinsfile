pipeline{
    agent any 
    
    stages{
        stage('Install dependencies') {
            steps {
                sh 'composer install --prefer-dist --no-dev'
            }
        }
        stage('Unit tests') {
            steps {
                sh 'vendor/bin/phpunit phpunit'
            }
        }
        }
    }
