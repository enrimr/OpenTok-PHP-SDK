:: Why? because windows can't do an OR within the conditional
IF NOT DEFINED API_KEY GOTO defkeysecret
IF NOT DEFINED API_SECRET GOTO defkeysecret
GOTO skipdef

:defkeysecret

SET API_KEY=45239802
SET API_SECRET=1019c9469125d71b94a79f61d888a3beb652ba5b

:skipdef

RD /q /s cache

php.exe -S 0.0.0.0:8080 -t web web/index.php
