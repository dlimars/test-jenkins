pipeline {
  agent {
    docker {
      image 'nubs/phpunit'
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