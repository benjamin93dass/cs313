

SELECT p.pid, p.cid, p.pname, c1.name1, c2.name2
FROM product p
LEFT JOIN customer1 c1 ON p.cid = c1.cid
LEFT JOIN customer2 c2 ON p.cid = c2.cid


SELECT p.pid, p.cid, p.pname, c1.name1, c2.name2
FROM event_participant p
LEFT JOIN customer1 c1 ON p.cid = c1.cid
LEFT JOIN customer2 c2 ON p.cid = c2.cid
