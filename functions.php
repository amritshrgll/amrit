<?php

/*
Aggregate:

SUM -> SELECT SUM(sal) FROM `emp`
COUNT ->SELECT COUNT(*) FROM `emp`
AVG -> SELECT AVG(sal) FROM `emp`
MIN -> SELECT MIN(sal) FROM `emp`
MAX -> SELECT MAX(sal) FROM `emp`


WHERE:
retriving data based on some conditions
select * from tablename where condition1 (for multiple onditions --> after where statement use and cond2 and cond3 ...)

SELECT * FROM `emp` where sal>=2000 and deptno=20;
SELECT * FROM `emp` where deptno in(20,30);
SELECT * FROM `emp` where sal between 2000 and 4000;

ambiguous
This means that a column name that you have included in your SELECT statement appears in more that one table in the FROM clause. Normally in SQL you don't have to specify the table the column comes from if it's not ambiguous

SELECT e.*,dname FROM `emp` e join dept d on d.deptno=e.deptno


*/
?>