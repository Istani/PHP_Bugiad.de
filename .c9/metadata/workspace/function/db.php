{"filter":false,"title":"db.php","tooltip":"/function/db.php","undoManager":{"mark":100,"position":100,"stack":[[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":70},"end":{"row":93,"column":71}},"text":"C"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":71},"end":{"row":93,"column":72}},"text":"A"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":72},"end":{"row":93,"column":73}},"text":"T"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":73},"end":{"row":93,"column":74}},"text":"E"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":74},"end":{"row":93,"column":75}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":75},"end":{"row":93,"column":76}},"text":"K"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":76},"end":{"row":93,"column":77}},"text":"E"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":77},"end":{"row":93,"column":78}},"text":"Y"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":78},"end":{"row":93,"column":79}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":79},"end":{"row":93,"column":80}},"text":"U"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":80},"end":{"row":93,"column":81}},"text":"P"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":81},"end":{"row":93,"column":82}},"text":"D"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":82},"end":{"row":93,"column":83}},"text":"A"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":83},"end":{"row":93,"column":84}},"text":"T"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":84},"end":{"row":93,"column":85}},"text":"E"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":85},"end":{"row":93,"column":86}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":86},"end":{"row":93,"column":101}},"text":"\".$sql_felder.\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":93,"column":100},"end":{"row":93,"column":101}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":93,"column":99},"end":{"row":93,"column":100}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":99},"end":{"row":93,"column":100}},"text":";"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":93,"column":100},"end":{"row":94,"column":0}},"text":"\r\n"},{"action":"insertText","range":{"start":{"row":94,"column":0},"end":{"row":94,"column":4}},"text":"\t\t\t\t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":94,"column":4},"end":{"row":94,"column":59}},"text":"if ($query=mysql_query($sql_string, $this->database)) {"},{"action":"insertText","range":{"start":{"row":94,"column":59},"end":{"row":95,"column":0}},"text":"\r\n"},{"action":"insertLines","range":{"start":{"row":95,"column":0},"end":{"row":102,"column":0}},"lines":["\t\t\t\t\tif (mysql_num_rows($query)>0) {","\t\t\t\t\t\twhile ($row=mysql_fetch_assoc($query)) {","\t\t\t\t\t\t\t$return_array[]=$row;","\t\t\t\t\t\t}","\t\t\t\t\t}","\t\t\t\t} else {","\t\t\t\t\t$this->error(\"<b>Abfrage:</b> <i>\"+$sql_string+\"</i><br>Konnte nicht ausgeführt werden!<br>\".mysql_error());"]},{"action":"insertText","range":{"start":{"row":102,"column":0},"end":{"row":102,"column":5}},"text":"\t\t\t\t}"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":99,"column":0},"end":{"row":99,"column":6}},"text":"\t\t\t\t\t}"},{"action":"removeLines","range":{"start":{"row":96,"column":0},"end":{"row":99,"column":0}},"nl":"\r\n","lines":["\t\t\t\t\t\twhile ($row=mysql_fetch_assoc($query)) {","\t\t\t\t\t\t\t$return_array[]=$row;","\t\t\t\t\t\t}"]},{"action":"removeText","range":{"start":{"row":95,"column":5},"end":{"row":95,"column":36}},"text":"if (mysql_num_rows($query)>0) {"},{"action":"removeText","range":{"start":{"row":95,"column":5},"end":{"row":96,"column":0}},"text":"\r\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":36},"end":{"row":78,"column":0}},"text":"\r\n"},{"action":"insertText","range":{"start":{"row":78,"column":0},"end":{"row":78,"column":3}},"text":"\t\t\t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":78,"column":3},"end":{"row":78,"column":4}},"text":"$"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":78,"column":4},"end":{"row":78,"column":5}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":78,"column":5},"end":{"row":78,"column":6}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":78,"column":6},"end":{"row":78,"column":7}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":78,"column":7},"end":{"row":78,"column":8}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":78,"column":7},"end":{"row":78,"column":8}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":78,"column":6},"end":{"row":78,"column":7}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":78,"column":5},"end":{"row":78,"column":6}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":78,"column":4},"end":{"row":78,"column":5}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":78,"column":3},"end":{"row":78,"column":4}},"text":"$"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":78,"column":2},"end":{"row":78,"column":3}},"text":"\t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":78,"column":1},"end":{"row":78,"column":2}},"text":"\t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":78,"column":0},"end":{"row":78,"column":1}},"text":"\t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":77,"column":36},"end":{"row":78,"column":0}},"text":"\r\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":78,"column":18},"end":{"row":79,"column":0}},"text":"\r\n"},{"action":"insertText","range":{"start":{"row":79,"column":0},"end":{"row":79,"column":3}},"text":"\t\t\t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":3},"end":{"row":79,"column":4}},"text":"$"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":4},"end":{"row":79,"column":5}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":5},"end":{"row":79,"column":6}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":6},"end":{"row":79,"column":7}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":7},"end":{"row":79,"column":8}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":8},"end":{"row":79,"column":9}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":9},"end":{"row":79,"column":10}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":10},"end":{"row":79,"column":11}},"text":"="}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":11},"end":{"row":79,"column":12}},"text":"f"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":12},"end":{"row":79,"column":13}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":13},"end":{"row":79,"column":14}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":14},"end":{"row":79,"column":15}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":15},"end":{"row":79,"column":16}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":79,"column":16},"end":{"row":79,"column":17}},"text":";"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":96,"column":5},"end":{"row":96,"column":19}},"text":"$return=false;"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":96,"column":13},"end":{"row":96,"column":18}},"text":"false"},{"action":"insertText","range":{"start":{"row":96,"column":13},"end":{"row":96,"column":14}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":96,"column":14},"end":{"row":96,"column":15}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":96,"column":15},"end":{"row":96,"column":16}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":96,"column":16},"end":{"row":96,"column":17}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":100,"column":4},"end":{"row":101,"column":0}},"text":"\r\n"},{"action":"insertText","range":{"start":{"row":101,"column":0},"end":{"row":101,"column":3}},"text":"\t\t\t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":3},"end":{"row":101,"column":4}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":4},"end":{"row":101,"column":5}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":5},"end":{"row":101,"column":6}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":6},"end":{"row":101,"column":7}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":7},"end":{"row":101,"column":8}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":8},"end":{"row":101,"column":9}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":9},"end":{"row":101,"column":10}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":10},"end":{"row":101,"column":11}},"text":"$"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":11},"end":{"row":101,"column":12}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":12},"end":{"row":101,"column":13}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":13},"end":{"row":101,"column":14}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":14},"end":{"row":101,"column":15}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":15},"end":{"row":101,"column":16}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":16},"end":{"row":101,"column":17}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":101,"column":17},"end":{"row":101,"column":18}},"text":";"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":77,"column":12},"end":{"row":77,"column":36}},"text":" On Duplicate Key Update"},{"action":"insertText","range":{"start":{"row":77,"column":12},"end":{"row":77,"column":13}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":13},"end":{"row":77,"column":14}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":14},"end":{"row":77,"column":15}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":15},"end":{"row":77,"column":16}},"text":"U"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":16},"end":{"row":77,"column":17}},"text":"p"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":77,"column":16},"end":{"row":77,"column":17}},"text":"p"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":77,"column":15},"end":{"row":77,"column":16}},"text":"U"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":77,"column":14},"end":{"row":77,"column":15}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":77,"column":13},"end":{"row":77,"column":14}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":77,"column":12},"end":{"row":77,"column":13}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":77,"column":11},"end":{"row":77,"column":12}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":11},"end":{"row":77,"column":12}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":12},"end":{"row":77,"column":13}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":13},"end":{"row":77,"column":14}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":14},"end":{"row":77,"column":15}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":15},"end":{"row":77,"column":16}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":16},"end":{"row":77,"column":17}},"text":"U"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":17},"end":{"row":77,"column":18}},"text":"p"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":18},"end":{"row":77,"column":19}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":19},"end":{"row":77,"column":20}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":77,"column":20},"end":{"row":77,"column":21}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":51,"column":30},"end":{"row":51,"column":31}},"text":";"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":63,"column":47},"end":{"row":63,"column":55}},"text":"database"},{"action":"insertText","range":{"start":{"row":63,"column":47},"end":{"row":63,"column":57}},"text":"connection"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":95,"column":47},"end":{"row":95,"column":55}},"text":"database"},{"action":"insertText","range":{"start":{"row":95,"column":47},"end":{"row":95,"column":57}},"text":"connection"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":88,"column":28},"end":{"row":88,"column":32}},"text":"vale"},{"action":"insertText","range":{"start":{"row":88,"column":28},"end":{"row":88,"column":33}},"text":"value"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":90,"column":33},"end":{"row":90,"column":37}},"text":"vale"},{"action":"insertText","range":{"start":{"row":90,"column":33},"end":{"row":90,"column":38}},"text":"value"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":94,"column":62},"end":{"row":94,"column":85}},"text":"ON DUPLICATE KEY UPDATE"},{"action":"insertText","range":{"start":{"row":94,"column":62},"end":{"row":94,"column":85}},"text":"ON DUPLICATE KEY UPDATE"}]}]]},"ace":{"folds":[],"scrolltop":847.5,"scrollleft":0,"selection":{"start":{"row":94,"column":85},"end":{"row":94,"column":85},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":59,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1405107134631,"hash":"f411b3ae7704fc5e8f4eea7c176c232d9d2c7726"}