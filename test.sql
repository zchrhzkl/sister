INSERT INTO disposition (userID, mailCreatedAt, mailDate, mailClassification, mailDegree, senderIn, RecipientIn, mailNumber, mailContent, mailAttch, mailStatus, archiveBool)
SELECT d.mailID, im.mailID,act.mailID
FROM disposition d
LEFT JOIN incoming im
ON im.mailID = d.mailID
LEFT JOIN Action act
ON act.mailID = im.mailID
