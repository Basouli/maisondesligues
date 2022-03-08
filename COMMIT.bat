@echo off

set name=basil

if exist ".git" (
#        C:\wamp64\bin\mysql\mysql5.7.31\bin\mysqldump -u root gsb_frais > bdd_restore\%date%.sql
	git switch %name%
	git add -A
	git commit -a -m "Script - %date%"
	git push -u maisondesligues %name% --force
	echo MsgBox "Project Pushed to Github  !"> msgbox.vbs
	cscript msgbox.vbs
	del "msgbox.vbs";
) else (
	git init
	git remote add maisondesligues https://github.com/Basouli/maisondesligues.git
	git remote set-url maisondesligues https://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@github.com/Basouli/maisondesligues.git
	git fetch maisondesligues %name%:%name%
	echo "COMMIT.bat">.gitignore
	git add -A
	git commit -a -m "Script - %date%"
	git push -u maisondesligues %name% --force
	echo MsgBox "Project gited and fetched !"> msgbox.vbs
	cscript msgbox.vbs
	del "msgbox.vbs";
)