# Installation Instructions
## 1. GitHub Account and Project Repository
 * Login to GitHub: If you do not have a GitHub account, please create one.
 * Search for the repository: Navigate to the following URL: https://github.com/MilanStankovic1993/ZWEBB_test.git
## 2. Cloning the Project
 * Open CMD, PowerShell, or GitBash terminal and enter the following command:
  "git clone https://github.com/MilanStankovic1993/ZWEBB_test.git"
## 3. Setting Up PHP
 * Download PHP: Go to PHP Downloads and download the PHP zip file for your system.
 * Extract PHP: Extract the downloaded zip file to a folder (e.g., C:\php).
 * Set the PATH:
    * Open Control Panel → System and Security → System.
    * Click on Advanced System Settings → Environment Variables.
    * In System Variables, find Path and click Edit.
    * Add the path to the PHP folder (e.g., C:\php).
    * Click OK.
 * Verify PHP Installation:
    * Open CMD, PowerShell, or GitBash and enter the following command:
      'php --version'
## 4. Setting Up Composer
 * Download Composer: Go to Composer Downloads and download the Composer-Setup.exe file.
 * Run the Installer:
    * Launch the downloaded Composer-Setup.exe.
    * Choose the option to install Composer globally so it can be used from any folder.
  * Set the PATH:
    * Composer is usually installed in C:\ProgramData\ComposerSetup\bin.
    * Add this path to Environment Variables → Path.
  * Verify Composer Installation:
    * Open CMD, PowerShell, or GitBash and enter:
      'composer --version'
  * Run the following Composer commands after confirming the installation:
      'composer install'
      'composer update'
## 5. Add the .env File
  * Place the .env file (attached to the email) in the root directory of the project.
## 6. Troubleshooting Composer Installation
  * If you encounter errors or deprecated warnings during Composer installation or update, add the following line to the php.ini file:
ini
   'error_reporting = E_ALL & ~E_DEPRECATED & ~E_NOTICE'
## 7. Setting Up MySQL
  * Download MySQL Server: Visit MySQL Downloads and download the MySQL Server.
  * Run the MySQL Installer:
    * Select the Developer Default installation option.
  * Configure MySQL:
    * During installation, choose port 3307.
    * Set the MySQL Root Password (e.g., root/root).
  * Run the following commands in the terminal (in the project root folder) after installing MySQL:
    'php artisan migrate'
    'php artisan db:seed'
  * Start the MySQL server after running the migrations:
    'php artisan serve'
  * Access the application: Open your browser and navigate to http://127.0.0.1:8000/.