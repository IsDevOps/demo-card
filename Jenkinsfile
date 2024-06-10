pipeline{
    agent any 
    
    stages{
        stage('Install PhP') {
            steps {
                sh 'sudo update-alternatives --set php /usr/bin/php$(phpVersion)'
                sh 'sudo update-alternatives --set phar /usr/bin/phar$(phpVersion)'
            }
        }        
        stage('Install dependencies') {
            steps {
                sh 'composer install --prefer-dist --no-dev'
            }
        }      
        stage('Run Migrations') {
            steps {
                sh 'php artisan migrate --env=dev'
            }
        }
        
        stage('Install Npm dependencies') {
            steps {
                sh 'npm install'
            }
        }
        stage('Install Npm Dev') {
            steps {
                sh 'npm run dev'
            }
        }
        stage('Archive file') {
            steps {
                sh 'tar -zcvf application.tar.gz public app bootstrap config vendor'
          }
        }
    }
}
    