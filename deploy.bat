set "curpath=%cd%"
winscp /script=deployScript.txt
plink ubuntu@ec2-34-228-155-67.compute-1.amazonaws.com sudo rm -rf /var/www/html/
plink ubuntu@ec2-34-228-155-67.compute-1.amazonaws.com sudo rsync -a /home/ubuntu/cadygorbet.com/. /var/www/html/




