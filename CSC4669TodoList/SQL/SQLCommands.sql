/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Maryam Ibrahim  fx5414
 * Created: Jan 13, 2018
 */

create database if not exists sampledb;
use sampledb;

CREATE TABLE IF NOT EXISTS theList (
    TaskID INTEGER NOT NULL PRIMARY KEY Auto_Increment,
    createdDate DATETIME NOT NULL,
    dueDate DATETIME NOT NULL,
    Title TEXT NOT NULL,
    theStatus TEXT NOT NULL CHECK(status IN('PENDING', 'STARTED', 'COMPLETED', 'LATE'))
);

CREATE TABLE IF NOT EXISTS Pending
(
    TaskID INTEGER NOT NULL PRIMARY KEY,
    FOREIGN KEY (TaskID) REFERENCES list(TaskID) 
);

CREATE TABLE IF NOT EXISTS Started
(
    TaskID INTEGER NOT NULL PRIMARY KEY,
    FOREIGN KEY (TaskID) REFERENCES list(TaskID) 
);

CREATE TABLE IF NOT EXISTS Complete
(
    TaskID INTEGER NOT NULL PRIMARY KEY,
    FOREIGN KEY (TaskID) REFERENCES list(TaskID) 
);

CREATE TABLE IF NOT EXISTS Late (
    TaskID INTEGER NOT NULL PRIMARY KEY,
    FOREIGN KEY (TaskID) REFERENCES list(TaskID)
);

insert into Thelist values (null, "2017/12/12 5:30", "2018-02-01 11:30", "Clean the garage", 'COMPLETED');
insert into Thelist values (null, "2017/05/09 8:30", "2017-05-11 12:30", "Pay the registration fees", 'LATE');
insert into Thelist values (null, "2018/01/09 6:00", "2018-01-15 10:00", "Finish CSC4996 assignemt", 'COMPLETED');
insert into Thelist values (null, "2018/01/15 12:00", "2018-01-16 05:30", "Pick senior project", 'STARTED');
insert into Thelist values (null, "2018/05/26 4:00", "2018-05-26 6:30", "Go to the Airport", 'PENDING');
insert into Thelist values (null, "2018/05/14 1:30", "2018-05-14 4:30", "Graduation party", 'PENDING');
insert into Thelist values (null, "2017/11/12 5:30", "2017-11-14 11:30", "Shopping", 'LATE');
insert into Thelist values (null, "2017/07/01 5:30", "2017-07-01 6:30", "Birthday Party", 'COMPLETED');
insert into Thelist values (null, "2017/04/05 5:30", "2017-04-15 8:30", "Meet John", 'COMPLETED');

insert into Pending (select TaskID from List where theStatus = 'PENDING');
insert into Started (select TaskID from List where theStatus = 'STARTED');
insert into Complete (select TaskID from List where theStatus = 'COMPLETED');
insert into Late (select TaskID from List where theStatus = 'LATE');






