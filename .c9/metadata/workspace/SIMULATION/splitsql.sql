{"filter":false,"title":"splitsql.sql","tooltip":"/simulation/splitsql.sql","undoManager":{"mark":13,"position":13,"stack":[[{"start":{"row":0,"column":0},"end":{"row":1,"column":128},"action":"insert","lines":["use houstonData;","select minute, position DIV 5 segment, count(*) total from MarathonRunners where dropout=0 and half=0 group by minute,segment;  "],"id":1}],[{"start":{"row":0,"column":4},"end":{"row":0,"column":15},"action":"remove","lines":["houstonData"],"id":2},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["h"]}],[{"start":{"row":0,"column":5},"end":{"row":0,"column":6},"action":"insert","lines":["o"],"id":3}],[{"start":{"row":0,"column":6},"end":{"row":0,"column":7},"action":"insert","lines":["u"],"id":4}],[{"start":{"row":0,"column":7},"end":{"row":0,"column":8},"action":"insert","lines":["s"],"id":5}],[{"start":{"row":0,"column":8},"end":{"row":0,"column":9},"action":"insert","lines":["t"],"id":6}],[{"start":{"row":0,"column":9},"end":{"row":0,"column":10},"action":"insert","lines":["o"],"id":7}],[{"start":{"row":0,"column":10},"end":{"row":0,"column":11},"action":"insert","lines":["n"],"id":8}],[{"start":{"row":0,"column":11},"end":{"row":0,"column":12},"action":"insert","lines":["2"],"id":9}],[{"start":{"row":0,"column":12},"end":{"row":0,"column":13},"action":"insert","lines":["0"],"id":10}],[{"start":{"row":0,"column":13},"end":{"row":0,"column":14},"action":"insert","lines":["1"],"id":11}],[{"start":{"row":0,"column":14},"end":{"row":0,"column":15},"action":"insert","lines":["6"],"id":12}],[{"start":{"row":1,"column":100},"end":{"row":1,"column":101},"action":"remove","lines":["0"],"id":13}],[{"start":{"row":1,"column":100},"end":{"row":1,"column":101},"action":"insert","lines":["1"],"id":14}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":1,"column":128},"end":{"row":1,"column":128},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1452899740000,"hash":"521063280af8252726be3921b8b3168a7316749a"}