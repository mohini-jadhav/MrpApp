@echo off
set dbUser=root
set dbPassword=system
set backupDir="E:\Backup\mysql"
set mysqldump="E:\MYSQL5630\MySQL Workbench 6.3 CE\mysqldump.exe"
set mysqlDataDir="E:\MYSQL5630\data"
set zip="E:\7-Zip\7z.exe"

:: get date
for /F "tokens=1-3 delims=- " %%i in ('date /t') do (
	set yy=%%i
	set mon=%%j
	set dd=%%k
)

:: get time
for /F "tokens=5-8 delims=:. " %%i in ('echo.^| time ^| find "current" ') do (
	set hh=%%i
	set mm=%%j
)

set dirName=%yy%%mon%%dd%_%hh%%mm%

:: switch to the "data" folder
pushd %mysqlDataDir%

:: iterate over the folder structure in the "data" folder to get the databases
for /d %%f in (*) do (

	if not exist %backupDir%\%dirName%\ (
		mkdir %backupDir%\%dirName%
	)

	%mysqldump% --host="192.168.167.26" --user=%dbUser% --password=%dbPassword% --single-transaction --add-drop-table --databases %%f > %backupDir%\%dirName%\%%f.sql

	%zip% a -tgzip %backupDir%\%dirName%\%%f.sql.gz %backupDir%\%dirName%\%%f.sql

	

)