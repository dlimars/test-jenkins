pipeline {
  agent {
    docker {
      image 'composer/composer:4.8.5'
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