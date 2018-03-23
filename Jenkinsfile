pipeline {
    agent {
        docker {
          image 'phpunit/phpunit:5.0.3'
        }
    }
    stages {
        stage('Build') {
            steps {
              sh 'php -r "file_exists(\'.env\') || copy(\'.env.testing\', \'.env\');"'
              sh 'composer install'
            }
        }
        stage('Test') {
            steps {
                sh 'phpunit'
            }
        }
    }
}