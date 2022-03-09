@echo off

#SET A VARIABLE TO ESTABLISH THE USER/BRANCH
set name=basil

#IF/ELSE ON GIT DIRECTORY EXISTING
if exist ".git" (
	#BE SURE THE BRANCH IS THE VARIABLE
	git checkout %name%

	#ADD ALL FILES ON GIT VERSIONING
	git add -A

	#COMMIT LOCAL WITH DATE AS COMMENT
	git commit -a -m "Script - %date%"

	#PUSH TO DISTANT REPOSITORY WITH VARIABLE AS BRANCH
	git push -u maisondesligues %name%

	#MAKE MESSAGE BOX TO ALERT END OF PROCESS
	echo MsgBox "Project Pushed to Github  !"> msgbox.vbs
	cscript msgbox.vbs

	#DELETE MESSAGE BOX
	del "msgbox.vbs";
) else (
	#CREATE FILE .gitignore AND ADD TEXT TO IT
	echo COMMIT.bat>.gitignore
	echo .git>.gitignore

	#CREATE GIT VERSIONING ON THE CURRENT DIRECTORY
	git init

	#ADD DISTANT REMOTE
	git remote add maisondesligues https://github.com/Basouli/maisondesligues.git

	#SET DISTANT REMOTE URL WITH AUTHENTICATION TOKEN
	git remote set-url maisondesligues https://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@github.com/Basouli/maisondesligues.git
	
	#FETCH CURRENT DIRECTORY WITH DISTANT REPOSITORY
	git fetch maisondesligues %name%:%name%

	#CREATE BRANCH IF NO EXIST
	git branch %name%

	#COMMENT EXPLANATIONS AT THE TOP, IN IF LOOP
	git checkout %name%
	git add -A
	git commit -a -m "Script - %date%"
	git push -u maisondesligues %name%
	echo MsgBox "Project gited and fetched !"> msgbox.vbs
	cscript msgbox.vbs
	del "msgbox.vbs";
)