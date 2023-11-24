-- SQL DIALECT POSTGRESQL
-- version 15.2

CREATE DATABASE exampleDB;
CREATE SCHEMA IF NOT EXISTS exampleSchema;
--
-- Table structure for table `author`
--

CREATE TABLE author
(
    id      SERIAL PRIMARY KEY NOT NULL,
    name    varchar(255)       NOT NULL,
    surname VARCHAR(255)       NOT NULL
);


-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE book
(
    id    SERIAL PRIMARY KEY NOT NULL,
    title VARCHAR(255)       NOT NULL,
    year  INT                NOT NULL,
    isbn  VARCHAR(255)       NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE review
(
    id      SERIAL PRIMARY KEY NOT NULL,
    book_id INTEGER REFERENCES book (id),
    score   INT                NOT NULL,
    comment VARCHAR            NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `author_book`
--

CREATE TABLE author_book
(
    author_id INTEGER REFERENCES author (id),
    book_id   INTEGER REFERENCES book (id),
    CONSTRAINT author_book_pk PRIMARY KEY (author_id, book_id)
);

-- --------------------------------------------------------


--
-- Select for author and count of books written
--

SELECT a.name, a.surname, COUNT(AB.book_id) as count
FROM author a
    LEFT JOIN author_book ab
ON a.id = ab.author_id
GROUP BY a.id;

-- --------------------------------------------------------

--
-- View for 5 authors with the highest review score of all books
--

CREATE VIEW review_average AS
SELECT a.id,
       a.name,
       a.surname                 as surname,
       AVG(COALESCE(r.score, 0)) as score
FROM author a
         LEFT JOIN author_book ab ON a.id = ab.author_id
         LEFT JOIN book b ON ab.book_id = b.id
         LEFT JOIN review r ON b.id = r.book_id
GROUP BY a.id
ORDER BY score DESC
LIMIT 5;

-- --------------------------------------------------------