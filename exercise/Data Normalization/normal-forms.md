Figure 1: Details of patient dental appointment

| staffNo | dentistName   |
| ------- | ------------- |
| S1011   | Tony Smith    |
| S1024   | Helen Pearson |
| S1032   | Robin Plevin  |

| ptientNo | dentistName   |
| -------- | ------------- |
| P100     | Gillian White |
| P105     | Jill Bell     |
| P108     | Ian MacKay    |
| P110     | John Walker   |

| ptientNo | surgeryNo |
| -------- | --------- |
| P100     | S10       |
| P105     | S15       |
| P108     | S10       |
| P110     | S13       |

| appointmentID | ptientNo | staffNo | appontment date | time  |
| ------------- | -------- | ------- | --------------- | ----- |
| A01           | P100     | S1011   | 12-Aug-03       | 10:00 |
| A02           | P105     | S1011   | 13-Aug-03       | 12:00 |
| A03           | P108     | S1024   | 12-Sept-03      | 10:00 |
| A04           | P108     | PS1024  | 14-Sept-03      | 10:00 |
| A05           | P105     | PS1032  | 14-Oct-03       | 16:30 |
| A06           | P120     | PS1032  | 15-Oct-03       | 18:00 |

Figure 2: Employees of InstantCover and their contracts to work at hotels

| NIN      | eName        | hoursPerWeek |
| -------- | ------------ | ------------ |
| 113567WD | Jogn Smith   | 16           |
| 234111XA | Diane Hocine | 24           |
| 712670YD | Sarah White  | 28           |

| contraID | contractNo | hotelNo | hotelLocation |
| -------- | ---------- | ------- | ------------- |
| con2     | C1024      | H25     | Edinburgh     |
| con3     | C1025      | H4      | Glasgow       |

| eName        | hotelLocation | NINID | contraID |
| ------------ | ------------- | ----- | -------- |
| Jogn Smith   | Edinburgh     | NIN01 | con2     |
| Diane Hocine | Glasgow       | NIN02 | con2     |
| Sarah White  | Glasgow       | NIN03 | con3     |
| John Smith   | Glasgow       | NIN01 | con3     |

Figure 3: Employees of state code and job code

| STATE CODE | HOME STATE |
| ---------- | ---------- |
| 26         | Michigan   |
| 56         | Wyoming    |

| JOB CODE | JOB       |
| -------- | --------- |
| J01      | Chef      |
| J02      | Waiter    |
| J03      | Bartender |

| Employee_ID | NAME  |
| ----------- | ----- |
| E001        | Alice |
| E002        | Bob   |
| E003        | Alice |

| Employee_ID | JOB CODE | STATE CODE |
| ----------- | -------- | ---------- |
| E001        | J1       | St01       |
| E001        | J2       | St01       |
| E003        | J2       | St02       |
| E001        | J3       | St02       |
| E003        | J1       | St02       |

Figure 4: Book of genre and author

| Book ID | Book                               | Genre                   |
| ------- | ---------------------------------- | ----------------------- |
| 1       | Twenty Thousand Leagues...         | Science fiction         |
| 2       | Journey to the Center of the earth | Science fiction         |
| 3       | Leaves of Grass                    | Poetry                  |
| 4       | Anna Karenina                      | Literary Fiction        |
| 5       | A Confession                       | Religious Autobiography |

| Book ID | Author       | Author Nationality |
| ------- | ------------ | ------------------ |
| 1       | Jules Verne  | French             |
| 2       | Jules Verne  | French             |
| 3       | Walt Whitman | American           |
| 4       | Leo Tolstoy  | Russian            |
| 5       | Leo Tolstoy  | Russian            |

Figure 5: StudentID & TutorID

| TutorID | TutEmail     |
| ------- | ------------ |
| Tut1    | tut1@fhbb.ch |
| Tut3    | tut3@fhbb.ch |
| Tut5    | tut5@fhbb.ch |

| Topic ID | Topic Name | Book       | UnitID |
| -------- | ---------- | ---------- | ------ |
| T1       | GMT        | Deumlich   | U1     |
| T2       | GIN        | Zehnder    | U2     |
| T3       | PhF        | Dümmlers   | U5     |
| T4       | AVQ        | Swiss Topo | U4     |

| Topic ID | Room | Date     |
| -------- | ---- | -------- |
| T1       | 629  | 23.02.03 |
| T2       | 631  | 18.11.02 |
| T3       | 632  | 05.05.03 |
| T4       | 621  | 04.07.03 |

| ScoreID | StudentID | Grade | TutorID | Topic ID |
| ------- | --------- | ----- | ------- | -------- |
| Sc1     | St1       | 4.7   | Tut1    | T1       |
| Sc2     | St1       | 5.1   | Tut3    | T2       |
| Sc3     | St4       | 4.3   | Tut1    | T1       |
| Sc4     | St2       | 4.9   | Tut3    | T3       |
| Sc5     | St2       | 5.0   | Tut5    | T4       |
