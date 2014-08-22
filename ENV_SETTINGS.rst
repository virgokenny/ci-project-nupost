
Environment Settings
=====================

1. Change Folder Authority to 777

 find . -type d -name "*" ! -path "./.git/*" ! -path "./.git" -exec chmod 777 {} \;

2. Add system submodule

 git submodule add git://github.com/YiPo/ci-proj-system.git private/system
