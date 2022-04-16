@echo off

::C:\ProgramData\Microsoft\Windows\Start Menu\Programs\StartUp 윈도우 켤 때 자동실행
::C:\Users\DEV01\Desktop\workspace\coding\syntax\infra-5-batch\batch-apps\app-bat-출퇴근도장

echo ":) Start Go to Work Stamp After..."
timeout 1
start 2start.bat
echo ":) Start Leave Work Stamp After..."
timeout 30600
start 3start.bat
