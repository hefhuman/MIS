-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 07:11 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

CREATE TABLE `account_types` (
  `id` int(11) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `switch` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`id`, `account_type`, `switch`, `date_created`) VALUES
(1, 'Administrator', 'Active', '2018-02-27 21:33:18'),
(2, 'QWERty', 'Active', '2018-03-06 14:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `bsc_curriculums`
--

CREATE TABLE `bsc_curriculums` (
  `CurriculumID` int(11) NOT NULL,
  `CurriculumDesc` varchar(50) NOT NULL,
  `YearImplemented` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsc_curriculums`
--

INSERT INTO `bsc_curriculums` (`CurriculumID`, `CurriculumDesc`, `YearImplemented`) VALUES
(7, 'ACAD-ABM 2019-2020', '2019'),
(8, 'K-12 2016', '2016'),
(9, 'ACAD-HUMSS 2019-2020', '2019'),
(10, 'ACAD-STEM 2019-2020', '2019'),
(11, 'TVL-HE-BAP 2019-2020', '2019'),
(12, 'TVL-HE-BART 2019-2020', '2019'),
(13, 'TVL-ICT-ANIM 2019-2020', '2019'),
(14, 'TVL-ICT-CSS 2019-2020', '2019'),
(15, 'TVL-ICT-PROG 2019-2020', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `bsc_enrollments`
--

CREATE TABLE `bsc_enrollments` (
  `EnrollmentNo` int(10) NOT NULL,
  `StudentNo` int(11) NOT NULL,
  `SchoolYear` varchar(10) NOT NULL,
  `Semester` int(11) NOT NULL,
  `DateEnrolled` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `SectionID` int(11) NOT NULL,
  `ModifiedCount` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bsc_profiles`
--

CREATE TABLE `bsc_profiles` (
  `LRN` varchar(12) NOT NULL,
  `StudentNo` int(11) NOT NULL,
  `CurriculumID` int(11) NOT NULL,
  `StudentStatus` varchar(20) NOT NULL,
  `Enrolled` tinyint(1) NOT NULL,
  `SemEntry` int(11) NOT NULL,
  `YearEntry` varchar(10) NOT NULL,
  `GraduationYear` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bsc_subjects`
--

CREATE TABLE `bsc_subjects` (
  `SubjectCode` varchar(15) NOT NULL,
  `SubjectDesc` varchar(100) NOT NULL,
  `PreRequisites` varchar(50) NOT NULL,
  `Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsc_subjects`
--

INSERT INTO `bsc_subjects` (`SubjectCode`, `SubjectDesc`, `PreRequisites`, `Type`) VALUES
('ANIM-1', 'Animation', '', 'CORE'),
('BusMath-2', 'Business Math', '', 'CORE'),
('CPAR', 'Contemporary Philippine Arts from the Regions', '', 'CORE'),
('CSP', 'Understanding Culture, Society and Politics', '', 'CORE'),
('CSS-1', 'Computer System Servicing', '', 'CORE'),
('DRRR', 'Disaster Readiness And Risk Reduction', '', 'CORE'),
('EASci-1', 'Earth and Life Science', '', 'CORE'),
('Eng-1', 'English for Academic and Professional Purposes', '', 'CORE'),
('FABM-2', 'Fundamental of Accounting and Business Management', '', 'CORE'),
('Fil-2', 'Pagbasa at Pagsuri tungo sa Pananaliksik', '', 'CORE'),
('KPW-1', 'Komunikasyon at Pananaliksik', '', 'CORE'),
('LIT', '21st Century Literature From the Philippines and the World', '', 'CORE'),
('Math-1', 'General Mathematics', '', 'CORE'),
('MIL', 'Media and Information Literacy', '', 'CORE'),
('OAM-2', 'Organization and Management', '', 'CORE'),
('OCC-1', 'Oral Communication in Context', '', 'CORE'),
('PDPK-1', 'Personal Development', '', 'CORE'),
('PE-1', 'Physical Education & Health', '', 'CORE'),
('PE-2', 'Physical Education & Health', '', 'CORE'),
('PROG-1', 'Programming 1', '', 'CORE'),
('RD-1', 'Research in Daily Life', '', 'CORE'),
('RWS-1', 'Reading and Writing Skills', '', 'CORE'),
('Sci-2', 'Physical Science', '', 'CORE'),
('STAT-2', 'Statistics and Probability', '', 'CORE'),
('UCSP-1', 'Understanding Culture Society and Politics', '', 'CORE');

-- --------------------------------------------------------

--
-- Table structure for table `bsc_syllabus`
--

CREATE TABLE `bsc_syllabus` (
  `CurriculumID` int(11) NOT NULL,
  `SubjectCode` varchar(15) NOT NULL,
  `Year` int(11) NOT NULL,
  `Semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsc_syllabus`
--

INSERT INTO `bsc_syllabus` (`CurriculumID`, `SubjectCode`, `Year`, `Semester`) VALUES
(8, 'Math-1', 11, 1),
(8, 'PE-1', 11, 1),
(8, 'PE-1', 11, 2),
(8, 'PE-1', 12, 1),
(8, 'PE-1', 12, 2),
(8, 'OCC-1', 1, 1),
(8, 'PDPK-1', 11, 1),
(8, 'Fil-2', 11, 2),
(8, 'RWS-1', 11, 2),
(8, 'DRRR', 11, 2),
(8, 'LIT', 11, 2),
(8, 'CPAR', 12, 1),
(8, 'KPW-1', 12, 1),
(15, 'OCC-1', 11, 1),
(15, 'KPW-1', 11, 1),
(15, 'Math-1', 11, 1),
(15, 'EASci-1', 11, 1),
(15, 'PDPK-1', 11, 1),
(15, 'LIT', 11, 1),
(15, 'PE-1', 11, 1),
(15, 'RWS-1', 11, 2),
(15, 'Fil-2', 11, 2),
(15, 'STAT-2', 11, 2),
(15, 'PE-2', 11, 2),
(15, 'UCSP-1', 12, 1),
(15, 'CPAR', 12, 1),
(15, 'MIL', 12, 1),
(15, 'Sci-2', 12, 1),
(8, 'Math-1', 11, 1),
(8, 'PE-1', 11, 1),
(8, 'PE-1', 11, 2),
(8, 'PE-1', 12, 1),
(8, 'PE-1', 12, 2),
(8, 'OCC-1', 1, 1),
(8, 'PDPK-1', 11, 1),
(8, 'Fil-2', 11, 2),
(8, 'RWS-1', 11, 2),
(8, 'DRRR', 11, 2),
(8, 'LIT', 11, 2),
(8, 'CPAR', 12, 1),
(8, 'KPW-1', 12, 1),
(15, 'OCC-1', 11, 1),
(15, 'KPW-1', 11, 1),
(15, 'Math-1', 11, 1),
(15, 'EASci-1', 11, 1),
(15, 'PDPK-1', 11, 1),
(15, 'LIT', 11, 1),
(15, 'PE-1', 11, 1),
(15, 'RWS-1', 11, 2),
(15, 'Fil-2', 11, 2),
(15, 'STAT-2', 11, 2),
(15, 'PE-2', 11, 2),
(15, 'UCSP-1', 12, 1),
(15, 'CPAR', 12, 1),
(15, 'MIL', 12, 1),
(15, 'Sci-2', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `clg_courses`
--

CREATE TABLE `clg_courses` (
  `CourseID` varchar(10) NOT NULL,
  `CourseDesc` varchar(100) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_courses`
--

INSERT INTO `clg_courses` (`CourseID`, `CourseDesc`, `DepartmentCode`) VALUES
('ACT', 'Associate in Computer Technology', 'DICT'),
('BSA', 'Bachelor of Science in Accountancy', 'DABM'),
('BSBA', 'Bachelor of Science in Business Administration', 'DABM'),
('BSIT', 'Bachelor of Science in Information Technology', 'DICT');

-- --------------------------------------------------------

--
-- Table structure for table `clg_curriculums`
--

CREATE TABLE `clg_curriculums` (
  `CurriculumID` int(11) NOT NULL,
  `CurriculumDesc` varchar(50) NOT NULL,
  `CourseID` varchar(10) NOT NULL,
  `YearImplemented` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_curriculums`
--

INSERT INTO `clg_curriculums` (`CurriculumID`, `CurriculumDesc`, `CourseID`, `YearImplemented`) VALUES
(1, 'BSIT - 2017-2018', 'BSIT', '2017'),
(2, 'ACT 2017-018', 'ACT', '2017'),
(3, 'BSBA 2017-2018', 'BSBA', '2017'),
(4, 'BSA 2017-2018', 'BSA', '2017'),
(5, 'sadfasf', 'BSIT', 'sdafasf'),
(6, 'sadfasf', 'BSIT', 'sdafasf'),
(7, 'Test Curriculum', 'BSA', '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `clg_enlistments`
--

CREATE TABLE `clg_enlistments` (
  `EnlistmentID` int(11) NOT NULL,
  `StudentNo` int(11) NOT NULL,
  `ScheduleID` int(11) NOT NULL,
  `EnrollmentNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_enlistments`
--

INSERT INTO `clg_enlistments` (`EnlistmentID`, `StudentNo`, `ScheduleID`, `EnrollmentNo`) VALUES
(1, 2, 10, 1),
(5, 3, 12, 3),
(6, 3, 10, 3),
(11, 2, 13, 1),
(12, 2, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `clg_grades`
--

CREATE TABLE `clg_grades` (
  `EnrollmentNo` int(11) NOT NULL,
  `SubjectCode` varchar(15) NOT NULL,
  `Prelim` decimal(10,2) DEFAULT '0.00',
  `Midterm` decimal(10,2) DEFAULT '0.00',
  `Final` decimal(10,2) DEFAULT '0.00',
  `GradeEquivalent` decimal(10,2) DEFAULT '0.00',
  `DateModified` varchar(20) DEFAULT '',
  `PersonnelID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_grades`
--

INSERT INTO `clg_grades` (`EnrollmentNo`, `SubjectCode`, `Prelim`, `Midterm`, `Final`, `GradeEquivalent`, `DateModified`, `PersonnelID`) VALUES
(1, 'IT 422', '1.30', '0.00', '1.50', '1.50', '2/25/18 11:53 PM', '2014'),
(3, 'IT 421', '0.00', '0.00', '0.00', '0.00', '2/26/18 6:48 PM', '2014-01356'),
(3, 'IT 422', '0.00', '0.00', '0.00', '0.00', '2/26/18 6:48 PM', '2014-01335'),
(1, 'PolSci 1', '0.00', '0.00', '0.00', '0.00', '2/26/18 7:44 PM', '2014-01685'),
(1, 'IT 111', '0.00', '0.00', '0.00', '0.00', '2/26/18 7:53 PM', '2014-01356');

-- --------------------------------------------------------

--
-- Table structure for table `clg_profiles`
--

CREATE TABLE `clg_profiles` (
  `StudentID` varchar(15) NOT NULL,
  `StudentNo` int(11) NOT NULL,
  `CourseID` varchar(10) DEFAULT NULL,
  `CurriculumID` int(11) DEFAULT NULL,
  `StudentStatus` varchar(15) DEFAULT NULL,
  `Enrolled` tinyint(1) DEFAULT '0',
  `Shiftee` tinyint(1) DEFAULT '0',
  `ShiftCourse` varchar(10) DEFAULT NULL,
  `SemEntry` int(10) DEFAULT NULL,
  `YearEntry` varchar(4) DEFAULT NULL,
  `GraduationYear` varchar(4) DEFAULT '',
  `ApplicationType` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_profiles`
--

INSERT INTO `clg_profiles` (`StudentID`, `StudentNo`, `CourseID`, `CurriculumID`, `StudentStatus`, `Enrolled`, `Shiftee`, `ShiftCourse`, `SemEntry`, `YearEntry`, `GraduationYear`, `ApplicationType`) VALUES
('2014-01389', 1, 'BSIT', 1, 'regular', 1, 0, '', 1, '2014', '2018', 'freshman'),
('2014-01574', 2, 'BSIT', 1, 'regular', 1, 0, '', 1, '2017', '2018', 'freshman'),
('2014-09090', 3, 'BSIT', 1, 'regular', 1, 0, '', 1, '2015', '2018', 'freshman');

-- --------------------------------------------------------

--
-- Table structure for table `clg_schedules`
--

CREATE TABLE `clg_schedules` (
  `ScheduleID` int(11) NOT NULL,
  `SubjectCode` varchar(15) NOT NULL,
  `Section` varchar(20) NOT NULL,
  `LecRoom` varchar(15) NOT NULL,
  `LecDays` varchar(10) NOT NULL,
  `LecTimeStart` varchar(10) NOT NULL,
  `LecTimeEnd` varchar(10) NOT NULL,
  `LecUnits` int(11) NOT NULL,
  `LabRoom` varchar(15) NOT NULL,
  `LabDays` varchar(10) NOT NULL,
  `LabTimeStart` varchar(10) NOT NULL,
  `LabTimeEnd` varchar(10) NOT NULL,
  `LabUnits` int(11) NOT NULL,
  `SchoolYear` varchar(15) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `PersonnelID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_schedules`
--

INSERT INTO `clg_schedules` (`ScheduleID`, `SubjectCode`, `Section`, `LecRoom`, `LecDays`, `LecTimeStart`, `LecTimeEnd`, `LecUnits`, `LabRoom`, `LabDays`, `LabTimeStart`, `LabTimeEnd`, `LabUnits`, `SchoolYear`, `Semester`, `PersonnelID`) VALUES
(10, 'IT 422', 'IT 422', 'RM-203', 'F', '09:00 AM', '12:00 PM', 1, '', '', '', '', 0, '2017-2018', '1', '2014-01335'),
(11, 'HISTORY 1', 'HIS', 'RM-203', 'MWF', '02:00 PM', '02:30 PM', 0, '', '', '', '', 0, '2017-2018', '1', '2014-01356'),
(12, 'IT 421', 'IT 421', 'RM-209', 'MW', '12:00 PM', '01:00 PM', 2, 'COMPLAB 2', 'TTh', '12:00 PM', '01:30 PM', 1, '2017-2018', '1', '2014-01356'),
(13, 'PolSci 1', 'PolSci 1', 'RM-203', 'MT', '04:30 PM', '06:00 PM', 3, '', '', '', '', 0, '2017-2018', '1', '2014-01685'),
(14, 'IT 111', 'IT 111 A', 'RM-209', 'MWF', '10:00 AM', '11:30 AM', 2, 'COMPLAB 2', 'TTh', '12:30 PM', '02:30 PM', 1, '2017-2018', '1', '2014-01356');

-- --------------------------------------------------------

--
-- Table structure for table `clg_subjects`
--

CREATE TABLE `clg_subjects` (
  `SubjectCode` varchar(15) NOT NULL,
  `SubjectDesc` varchar(100) NOT NULL,
  `LecUnits` int(11) NOT NULL,
  `LabUnits` int(11) NOT NULL,
  `PreRequisites` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_subjects`
--

INSERT INTO `clg_subjects` (`SubjectCode`, `SubjectDesc`, `LecUnits`, `LabUnits`, `PreRequisites`) VALUES
('Engl 1', 'Study & Thinking Skills', 3, 0, ''),
('Engl 2', 'Writing in the Discipline', 3, 0, 'Engl 1,'),
('Engl 3', 'Speech Improvement & Oral Communication', 3, 0, 'Engl 2'),
('Fil 1', 'Sining ng Komunikasyon sa Akademikong Filipino', 3, 0, ''),
('HISTORY 1', 'Philippine History', 3, 0, ''),
('IT 110', 'Computer Concepts & Operations', 2, 1, ''),
('IT 111', 'Computer Programming', 2, 1, ''),
('IT 420', 'PC Hardware Troubleshooting', 2, 1, ''),
('IT 421', 'Project Design 2', 2, 1, ''),
('IT 422', 'Computer Ethics', 2, 1, ''),
('IT ELEC 2', 'Major Elective 2', 2, 1, ''),
('IT ELEC 3', 'Major Elective 3', 2, 1, ''),
('KBD 101', 'Basic Keyboarding', 2, 1, ''),
('LIT 2', 'World Literature', 2, 1, ''),
('Lit-1', 'Philippine Literature', 3, 0, ''),
('PE 1', 'Physcal Fitness', 2, 0, ''),
('PE 2', 'Rythmic Activities', 3, 0, 'PE 1'),
('POLSCI 1', 'Political Science', 3, 0, ''),
('TestSubject', 'Testing Purposes', 3, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `clg_syllabus`
--

CREATE TABLE `clg_syllabus` (
  `CurriculumID` int(11) NOT NULL,
  `SubjectCode` varchar(15) NOT NULL,
  `Year` int(11) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Major` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_syllabus`
--

INSERT INTO `clg_syllabus` (`CurriculumID`, `SubjectCode`, `Year`, `Semester`, `Major`) VALUES
(1, 'Engl 1', 1, 1, 0),
(1, 'Fil 1', 1, 1, 0),
(1, 'IT 110', 1, 1, 1),
(1, 'IT 111', 1, 1, 1),
(1, 'KBD 101', 1, 1, 1),
(1, 'Math 1', 1, 1, 0),
(1, 'NSTP 1', 1, 1, 0),
(1, 'PE 1', 1, 1, 0),
(1, 'Socio 1', 1, 1, 0),
(1, 'Econ 1', 1, 2, 0),
(1, 'Engl 2', 1, 2, 0),
(1, 'Fil 2', 1, 2, 0),
(1, 'IT 120', 1, 2, 1),
(1, 'IT 121', 1, 2, 1),
(1, 'IT 122', 1, 2, 1),
(1, 'Math 2', 1, 2, 0),
(1, 'NSTP 2', 1, 2, 0),
(1, 'PE 2', 1, 2, 0),
(1, 'Engl 3', 2, 1, 0),
(1, 'IT 210', 2, 1, 1),
(1, 'IT 211', 2, 1, 1),
(1, 'IT 212', 2, 1, 1),
(1, 'IT 213', 2, 1, 1),
(1, 'IT 214', 2, 1, 1),
(1, 'IT 215', 2, 1, 1),
(1, 'Math 3', 2, 1, 0),
(1, 'PE 3', 2, 1, 0),
(1, 'Engl 4', 2, 2, 0),
(1, 'IT 220', 2, 2, 1),
(1, 'IT 221', 2, 2, 1),
(1, 'IT 222', 2, 2, 1),
(1, 'IT 223', 2, 2, 1),
(1, 'Lit 1', 2, 2, 0),
(1, 'PE 4', 2, 2, 0),
(1, 'Psych 1', 2, 2, 0),
(1, 'Math 4', 2, 2, 0),
(1, 'Rizal', 3, 1, 0),
(1, 'Hum 1', 3, 1, 0),
(1, 'IT 310', 3, 1, 1),
(1, 'IT 311', 3, 1, 1),
(1, 'IT 312', 3, 1, 1),
(1, 'IT 313', 3, 1, 1),
(1, 'IT Elec 1', 3, 1, 1),
(1, 'Physics 1', 3, 1, 0),
(1, 'Acctg 100', 3, 2, 0),
(1, 'IT 320', 3, 2, 1),
(1, 'IT 321', 3, 2, 1),
(1, 'IT 322', 3, 2, 1),
(1, 'IT 323', 3, 2, 1),
(1, 'Physics 2', 3, 2, 0),
(1, 'IT 331', 3, 3, 1),
(1, 'His 1', 4, 1, 0),
(1, 'IT 410', 4, 1, 1),
(1, 'IT 411', 4, 1, 1),
(1, 'IT 412', 4, 1, 1),
(1, 'IT 413', 4, 1, 1),
(1, 'IT Elec 2', 4, 1, 1),
(1, 'Philo 1', 4, 1, 0),
(1, 'IT 420', 4, 2, 1),
(1, 'IT 421', 4, 2, 1),
(1, 'IT 422', 4, 2, 1),
(1, 'IT Elec 3', 4, 2, 1),
(1, 'Lit 2', 4, 2, 0),
(1, 'PolSci 1', 4, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  `DepartmentName` varchar(100) NOT NULL,
  `switch` varchar(15) NOT NULL,
  `Date_Created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `DepartmentCode`, `DepartmentName`, `switch`, `Date_Created`) VALUES
(1, 'DTE', 'DEPARTMENT OF TEACHERS EDUCATION', 'Active', '2018-02-27 21:35:17'),
(2, 'DICT', 'Depar', 'Active', '2018-03-06 14:09:02'),
(3, 'DICT', 'Depar', 'Active', '2018-03-06 14:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `facil_name` varchar(255) NOT NULL,
  `switch` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `type`, `description`, `facil_name`, `switch`, `date_created`) VALUES
(1, 'Computer_Laboratory', 'Room 308, Animation', 'Laboratory 3', 'Active', '2018-02-27 21:34:19'),
(2, '1', '1', '2', 'Active', '2018-03-06 14:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `personnels`
--

CREATE TABLE `personnels` (
  `PersonnelID` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `switch` varchar(15) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hasAccount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnels`
--

INSERT INTO `personnels` (`PersonnelID`, `first_name`, `middle_name`, `last_name`, `account_type`, `switch`, `date_created`, `hasAccount`) VALUES
('2013-01056', 'Trisha Ann', 'B.', 'Villaluna', 'Administrator', 'Inactive', '2018-02-27 21:35:35', 'Yes'),
('321', '321', '3.', '321', 'Administrator', 'Active', '2018-03-06 14:09:12', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `shs_curriculums`
--

CREATE TABLE `shs_curriculums` (
  `CurriculumID` int(11) NOT NULL,
  `CurriculumDesc` varchar(50) NOT NULL,
  `StrandCode` varchar(15) NOT NULL,
  `YearImplemented` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shs_curriculums`
--

INSERT INTO `shs_curriculums` (`CurriculumID`, `CurriculumDesc`, `StrandCode`, `YearImplemented`) VALUES
(7, 'ACAD-ABM 2019-2020', 'ACAD-ABM', '2019'),
(8, 'ACAD-GAS 2019-2020', 'ACAD-GAS', '2019'),
(9, 'ACAD-HUMSS 2019-2020', 'ACAD-HUMSS', '2019'),
(10, 'ACAD-STEM 2019-2020', 'ACAD-STEM', '2019'),
(11, 'TVL-HE-BAP 2019-2020', 'TVL-HE-BAP', '2019'),
(12, 'TVL-HE-BART 2019-2020', 'TVL-HE-BART', '2019'),
(13, 'TVL-ICT-ANIM 2019-2020', 'TVL-ICT-ANIM', '2019'),
(14, 'TVL-ICT-CSS 2019-2020', 'TVL-ICT-CSS', '2019'),
(15, 'TVL-ICT-PROG 2019-2020', 'TVL-ICT-PROG', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `shs_enlistments`
--

CREATE TABLE `shs_enlistments` (
  `EnlistmentID` int(11) NOT NULL,
  `StudentNo` int(11) NOT NULL,
  `ScheduleID` int(11) NOT NULL,
  `EnrollmentNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shs_enlistments`
--

INSERT INTO `shs_enlistments` (`EnlistmentID`, `StudentNo`, `ScheduleID`, `EnrollmentNo`) VALUES
(9, 4, 9, 1),
(10, 4, 10, 1),
(11, 4, 11, 1),
(12, 4, 12, 1),
(13, 4, 13, 1),
(14, 4, 14, 1),
(15, 4, 15, 1),
(16, 4, 17, 1),
(17, 7, 9, 2),
(18, 7, 10, 2),
(19, 7, 11, 2),
(20, 7, 12, 2),
(21, 7, 13, 2),
(22, 7, 14, 2),
(23, 7, 15, 2),
(24, 7, 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `shs_enrollments`
--

CREATE TABLE `shs_enrollments` (
  `EnrollmentNo` int(10) NOT NULL,
  `StudentNo` int(11) NOT NULL,
  `SchoolYear` varchar(10) NOT NULL,
  `Semester` int(11) NOT NULL,
  `DateEnrolled` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `SectionID` int(11) NOT NULL,
  `StrandCode` varchar(20) NOT NULL,
  `ModifiedCount` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shs_enrollments`
--

INSERT INTO `shs_enrollments` (`EnrollmentNo`, `StudentNo`, `SchoolYear`, `Semester`, `DateEnrolled`, `SectionID`, `StrandCode`, `ModifiedCount`) VALUES
(1, 4, '2017-2018', 1, '2018-02-17 19:19:31', 2, 'TVL-ICT-PROG', 1),
(2, 7, '2017-2018', 1, '2018-02-26 00:53:07', 2, 'TVL-ICT-PROG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shs_grades`
--

CREATE TABLE `shs_grades` (
  `EnrollmentNo` int(11) NOT NULL,
  `SubjectCode` varchar(15) NOT NULL,
  `Prelim` decimal(10,2) DEFAULT '0.00',
  `Midterm` decimal(10,2) DEFAULT '0.00',
  `Final` decimal(10,2) DEFAULT '0.00',
  `GradeEquivalent` decimal(10,2) DEFAULT '0.00',
  `DateModified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PersonnelID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shs_grades`
--

INSERT INTO `shs_grades` (`EnrollmentNo`, `SubjectCode`, `Prelim`, `Midterm`, `Final`, `GradeEquivalent`, `DateModified`, `PersonnelID`) VALUES
(1, 'Engl-1', '0.00', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', '2014-01685'),
(1, 'Math-1', '0.00', '0.00', '0.00', '2.00', '0000-00-00 00:00:00', '2014-01356'),
(1, 'EASci-1', '0.00', '0.00', '3.00', '0.00', '0000-00-00 00:00:00', '2014-01685'),
(1, 'KPW-1', '0.00', '0.00', '2.10', '0.00', '0000-00-00 00:00:00', '2014-01685'),
(1, 'OCC-1', '0.00', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', '2014-01335'),
(1, 'PDPK-1', '0.00', '0.00', '2.10', '0.00', '0000-00-00 00:00:00', '2014-01685'),
(1, 'PE-1', '0.00', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', '2014-01335'),
(1, 'RD-1', '0.00', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', '2014-01335'),
(2, 'Engl-1', '0.00', '0.00', '0.00', '0.00', '2018-02-26 00:53:07', '2014-01685'),
(2, 'Math-1', '0.00', '0.00', '0.00', '0.00', '2018-02-26 00:53:07', '2014-01356'),
(2, 'EASci-1', '0.00', '0.00', '0.00', '0.00', '2018-02-26 00:53:07', '2014-01685'),
(2, 'KPW-1', '0.00', '0.00', '0.00', '0.00', '2018-02-26 00:53:07', '2014-01685'),
(2, 'OCC-1', '0.00', '0.00', '0.00', '0.00', '2018-02-26 00:53:08', '2014-01335'),
(2, 'PDPK-1', '0.00', '0.00', '0.00', '0.00', '2018-02-26 00:53:08', '2014-01685'),
(2, 'PE-1', '0.00', '0.00', '0.00', '0.00', '2018-02-26 00:53:08', '2014-01335'),
(2, 'RD-1', '0.00', '0.00', '0.00', '0.00', '2018-02-26 00:53:08', '2014-01335');

-- --------------------------------------------------------

--
-- Table structure for table `shs_profiles`
--

CREATE TABLE `shs_profiles` (
  `LRN` varchar(12) NOT NULL,
  `StudentNo` int(11) NOT NULL,
  `StrandCode` varchar(15) NOT NULL,
  `CurriculumID` int(11) NOT NULL,
  `StudentStatus` varchar(15) NOT NULL,
  `Enrolled` tinyint(1) NOT NULL,
  `Shiftee` tinyint(1) NOT NULL,
  `ShiftStrand` varchar(20) DEFAULT '',
  `SemEntry` int(11) NOT NULL,
  `YearEntry` varchar(10) NOT NULL,
  `GraduationYear` varchar(10) DEFAULT '',
  `ApplicationType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shs_profiles`
--

INSERT INTO `shs_profiles` (`LRN`, `StudentNo`, `StrandCode`, `CurriculumID`, `StudentStatus`, `Enrolled`, `Shiftee`, `ShiftStrand`, `SemEntry`, `YearEntry`, `GraduationYear`, `ApplicationType`) VALUES
('65456789087', 7, 'TVL-ICT-PROG', 15, 'regular', 1, 0, NULL, 1, '2014', '2018', 'freshman'),
('80890099', 4, 'TVL-ICT-PROG', 15, 'regular', 1, 0, '', 1, '2017', '2018', 'freshman');

-- --------------------------------------------------------

--
-- Table structure for table `shs_schedules`
--

CREATE TABLE `shs_schedules` (
  `ScheduleID` int(11) NOT NULL,
  `SubjectCode` varchar(15) NOT NULL,
  `SectionID` int(11) NOT NULL,
  `TimeStart` varchar(10) NOT NULL,
  `TimeEnd` varchar(10) NOT NULL,
  `Room` varchar(15) NOT NULL,
  `Days` varchar(10) NOT NULL,
  `PersonnelID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shs_schedules`
--

INSERT INTO `shs_schedules` (`ScheduleID`, `SubjectCode`, `SectionID`, `TimeStart`, `TimeEnd`, `Room`, `Days`, `PersonnelID`) VALUES
(1, 'PDPK-1', 1, '7:30AM', '8:30AM', '205', 'MWF', '2014-01685'),
(2, 'PE-1', 1, '8:30AM', '11:00AM', '205', 'W', '2014-01356'),
(3, 'RD-1', 1, '8:30AM', '9:30AM', '205', 'MTF', '2014-01335'),
(4, 'RWS-1', 1, '9:30AM', '10:30AM', '205', 'TTh', '2014-01685'),
(5, 'EASci-1', 1, '11:00AM', '12:00AM', '205', 'WThF', '2014-01356'),
(6, 'Eng-1', 1, '1:00PM', '2:00PM', '205', 'MWF', '2014-01356'),
(7, 'KPW-1', 1, '2:00PM', '3:00PM', '205', 'MWF', '2014-01356'),
(8, 'Math-1', 1, '1:00PM', '3:00PM', '205', 'TTH', '2014-01335'),
(9, 'Engl-1', 2, '7:30AM', '8:30AM', '308', 'MWF', '2014-01685'),
(10, 'Math-1', 2, '8:30AM', '9:30AM', '308', 'MWF', '2014-01356'),
(11, 'EASci-1', 2, '10:00AM', '11:00AM', '308', 'MWF', '2014-01685'),
(12, 'KPW-1', 2, '11:00AM', '12:00PM', '308', 'MWF', '2014-01685'),
(13, 'OCC-1', 2, '1:00PM', '2:00PM', '308', 'MWF', '2014-01335'),
(14, 'PDPK-1', 2, '9:30AM', '10:30AM', '308', 'TTh', '2014-01685'),
(15, 'PE-1', 2, '11:00AM', '1:00PM', '308', 'T', '2014-01335'),
(16, 'PROG-1', 2, '1:00PM', '3:00PM', 'COMLAB-1', 'TTH', ''),
(17, 'RD-1', 2, '11:00AM', '1:00PM', '308', 'Th', '2014-01335');

-- --------------------------------------------------------

--
-- Table structure for table `shs_secstudents`
--

CREATE TABLE `shs_secstudents` (
  `StudentNo` int(11) NOT NULL,
  `SectionID` int(11) NOT NULL,
  `EnrollmentNo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shs_secstudents`
--

INSERT INTO `shs_secstudents` (`StudentNo`, `SectionID`, `EnrollmentNo`) VALUES
(4, 2, '1'),
(7, 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `shs_sections`
--

CREATE TABLE `shs_sections` (
  `SectionID` int(11) NOT NULL,
  `StrandCode` varchar(15) NOT NULL,
  `SectionName` varchar(20) NOT NULL,
  `Room` varchar(15) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `PersonnelID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shs_sections`
--

INSERT INTO `shs_sections` (`SectionID`, `StrandCode`, `SectionName`, `Room`, `Session`, `PersonnelID`) VALUES
(1, 'ACAD-ABM', 'Zeal', '205', 'Day', '2014-01335'),
(2, 'TVL-ICT-PROG', 'Hope', '308', 'Day', '2014-01356'),
(3, 'ACAD-HUMSS', 'Trustworthy', '305', 'Day', '2014-01685'),
(4, 'TVL-ICT-PROG', 'Patience', '317', 'Night', '2014-01335'),
(5, 'ACAD-HUMSS', 'Perseverance', '314', 'Night', '2014-01356');

-- --------------------------------------------------------

--
-- Table structure for table `shs_strands`
--

CREATE TABLE `shs_strands` (
  `StrandCode` varchar(15) NOT NULL,
  `Track` varchar(50) NOT NULL,
  `StrandDesc` varchar(100) NOT NULL,
  `Major` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shs_strands`
--

INSERT INTO `shs_strands` (`StrandCode`, `Track`, `StrandDesc`, `Major`) VALUES
('ACAD-ABM', 'Academic', 'Accountancy, Business & Management', ''),
('ACAD-GAS', 'Academic', 'General Academic STrand', ''),
('ACAD-HUMSS', 'Academic', 'Humanities & Social Sciences', ''),
('ACAD-STEM', 'Academic', 'Science, Technology, Engineering & Mathematics', ''),
('TVL-HE-BAP', 'Technical Vocational & Livelihood', 'Home Economics', 'Bread And Pastry'),
('TVL-HE-BART', 'Technical-Vocational & Livelihood', 'Home Economics ', 'Bartending'),
('TVL-ICT-ANIM', 'Technical-Vocational & Livelihood', 'Information & Communication Technology', 'Animation'),
('TVL-ICT-CSS', 'Technical-Vocational & Livelihood', 'Information & Communication Technology', 'Computer System Servicing'),
('TVL-ICT-PROG', 'Technical-Vocational & Livelihood', 'Information & Communication Technology', 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `shs_subjects`
--

CREATE TABLE `shs_subjects` (
  `SubjectCode` varchar(15) NOT NULL,
  `SubjectDesc` varchar(100) NOT NULL,
  `PreRequisites` varchar(50) DEFAULT '',
  `Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shs_subjects`
--

INSERT INTO `shs_subjects` (`SubjectCode`, `SubjectDesc`, `PreRequisites`, `Type`) VALUES
('ANIM-1', 'Animation', '', 'CORE'),
('BusMath-2', 'Business Math', '', 'CORE'),
('CPAR', 'Contemporary Philippine Arts from the Regions', '', 'CORE'),
('CSP', 'Understanding Culture, Society and Politics', '', 'CORE'),
('CSS-1', 'Computer System Servicing', '', 'CORE'),
('DRRR', 'Disaster Readiness And Risk Reduction', '', 'CORE'),
('EASci-1', 'Earth and Life Science', '', 'CORE'),
('Engl-1', 'English for Academic and Professional Purposes', '', 'CORE'),
('FABM-2', 'Fundamental of Accounting and Business Management', '', 'CORE'),
('Fil-2', 'Pagbasa at Pagsuri tungo sa Pananaliksik', '', 'CORE'),
('KPW-1', 'Komunikasyon at Pananaliksik', '', 'CORE'),
('LIT', '21st Century Literature From the Philippines and the World', '', 'CORE'),
('Math-1', 'General Mathematics', '', 'CORE'),
('MIL', 'Media and Information Literacy', '', 'CORE'),
('OAM-2', 'Organization and Management', '', 'CORE'),
('OCC-1', 'Oral Communication in Context', '', 'CORE'),
('PDPK-1', 'Personal Development', '', 'CORE'),
('PE-1', 'Physical Education & Health', '', 'CORE'),
('PE-2', 'Physical Education & Health', '', 'CORE'),
('PROG-1', 'Programming 1', '', 'CORE'),
('RD-1', 'Research in Daily Life', '', 'CORE'),
('RWS-1', 'Reading and Writing Skills', '', 'CORE'),
('Sci-2', 'Physical Science', '', 'CORE'),
('STAT-2', 'Statistics and Probability', '', 'CORE'),
('UCSP-1', 'Understanding Culture Society and Politics', '', 'CORE');

-- --------------------------------------------------------

--
-- Table structure for table `shs_syllabus`
--

CREATE TABLE `shs_syllabus` (
  `CurriculumID` int(11) NOT NULL,
  `SubjectCode` varchar(15) NOT NULL,
  `Year` int(11) NOT NULL,
  `Semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shs_syllabus`
--

INSERT INTO `shs_syllabus` (`CurriculumID`, `SubjectCode`, `Year`, `Semester`) VALUES
(8, 'Math-1', 11, 1),
(8, 'PE-1', 11, 1),
(8, 'PE-1', 11, 2),
(8, 'PE-1', 12, 1),
(8, 'PE-1', 12, 2),
(8, 'OCC-1', 1, 1),
(8, 'PDPK-1', 11, 1),
(8, 'Fil-2', 11, 2),
(8, 'RWS-1', 11, 2),
(8, 'DRRR', 11, 2),
(8, 'LIT', 11, 2),
(8, 'CPAR', 12, 1),
(8, 'KPW-1', 12, 1),
(15, 'OCC-1', 11, 1),
(15, 'KPW-1', 11, 1),
(15, 'Math-1', 11, 1),
(15, 'EASci-1', 11, 1),
(15, 'PDPK-1', 11, 1),
(15, 'LIT', 11, 1),
(15, 'PE-1', 11, 1),
(15, 'RWS-1', 11, 2),
(15, 'Fil-2', 11, 2),
(15, 'STAT-2', 11, 2),
(15, 'PE-2', 11, 2),
(15, 'UCSP-1', 12, 1),
(15, 'CPAR', 12, 1),
(15, 'MIL', 12, 1),
(15, 'Sci-2', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `std_accounts`
--

CREATE TABLE `std_accounts` (
  `InvoiceId` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Amount` float NOT NULL,
  `No` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_accounts`
--

INSERT INTO `std_accounts` (`InvoiceId`, `Description`, `Type`, `Amount`, `No`) VALUES
('hahahahahah', 'Tuition Fee', 'Tuition', 900, 1),
('hahahahahah', 'Computer Laboratory', 'Lab', 750, 2),
('hahahahahah', 'Academic Development', 'Miscellaneous', 250, 3),
('hahahahahah', 'Athletic', 'Miscellaneous', 160, 4),
('hahahahahah', 'Dental Fee', 'Miscellaneous', 350, 5),
('hahahahahah', 'Guidance Service', 'Miscellaneous', 50, 6),
('hahahahahah', 'Library Fee', 'Miscellaneous', 500, 7),
('hahahahahah', 'Medical Fee', 'Miscellaneous', 350, 8),
('hahahahahah', 'School & Community', 'Miscellaneous', 30, 9),
('hahahahahah', 'School ID', 'Miscellaneous', 125, 10),
('hahahahahah', 'Student Development Service', 'Miscellaneous', 250, 11),
('hahahahahah', 'Energy Fee', 'Others', 750, 12),
('hahahahahah', 'Enrollment Fee', 'Others', 500, 13),
('hahahahahah', 'Internet Fee', 'Others', 350, 14),
('hahahahahah', 'Downpayment', 'Less', 500, 15),
('hahahahahah', 'Early Bird Discount', 'Discount', 1594.5, 16);

-- --------------------------------------------------------

--
-- Table structure for table `std_duepayments`
--

CREATE TABLE `std_duepayments` (
  `InvoiceID` varchar(50) NOT NULL,
  `DueDate` varchar(30) NOT NULL,
  `AmountDue` float NOT NULL,
  `Balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_duepayments`
--

INSERT INTO `std_duepayments` (`InvoiceID`, `DueDate`, `AmountDue`, `Balance`) VALUES
('hahahahahah', '2018-02-06', 1000, 1000),
('hahahahahah', '2018-02-07', 1000, 1000),
('hahahahahah', '2018-02-15', 1220.5, 1220.5);

-- --------------------------------------------------------

--
-- Table structure for table `std_enrollments`
--

CREATE TABLE `std_enrollments` (
  `EnrollmentNo` int(10) NOT NULL,
  `StudentNo` int(11) NOT NULL,
  `SchoolYear` varchar(10) NOT NULL,
  `Semester` int(11) NOT NULL,
  `DateEnrolled` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_enrollments`
--

INSERT INTO `std_enrollments` (`EnrollmentNo`, `StudentNo`, `SchoolYear`, `Semester`, `DateEnrolled`) VALUES
(1, 2, '2017-2018', 1, '2018-02-16 20:36:35'),
(2, 4, '2017-2018', 1, '2018-02-16 20:36:35'),
(3, 3, '2017-2018', 1, '2018-02-16 20:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `std_fbg`
--

CREATE TABLE `std_fbg` (
  `StudentNo` int(11) NOT NULL,
  `F_Name` varchar(30) NOT NULL DEFAULT '',
  `F_Address` varchar(100) NOT NULL DEFAULT '',
  `F_ContactNo` varchar(15) NOT NULL DEFAULT '',
  `F_Occupation` varchar(30) NOT NULL DEFAULT '',
  `F_Income` varchar(15) NOT NULL DEFAULT '',
  `M_Name` varchar(30) NOT NULL DEFAULT '',
  `M_Address` varchar(100) NOT NULL DEFAULT '',
  `M_ContactNo` varchar(15) NOT NULL DEFAULT '',
  `M_Occupation` varchar(30) NOT NULL DEFAULT '',
  `M_Income` varchar(15) NOT NULL DEFAULT '',
  `G_Name` varchar(30) NOT NULL DEFAULT '',
  `G_Address` varchar(100) NOT NULL DEFAULT '',
  `G_Relationship` varchar(15) NOT NULL DEFAULT '',
  `G_ContactNo` varchar(15) NOT NULL DEFAULT '',
  `S_Name` varchar(30) NOT NULL DEFAULT '',
  `S_ContactNo` varchar(15) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_fbg`
--

INSERT INTO `std_fbg` (`StudentNo`, `F_Name`, `F_Address`, `F_ContactNo`, `F_Occupation`, `F_Income`, `M_Name`, `M_Address`, `M_ContactNo`, `M_Occupation`, `M_Income`, `G_Name`, `G_Address`, `G_Relationship`, `G_ContactNo`, `S_Name`, `S_ContactNo`) VALUES
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Mr. Tyler', '', 'Father', '123123', '100000', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Mr. Tyler', '', 'Father', '123123', '100000', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Mr. Way', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Sir Baybayanon', '', '', '', '', 'Maam Baybayanon', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `std_fees`
--

CREATE TABLE `std_fees` (
  `FeeID` int(11) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_fees`
--

INSERT INTO `std_fees` (`FeeID`, `Description`, `Type`, `Amount`) VALUES
(1, 'Unit Fee', 'Unit', 300),
(2, 'Computer Laboratory', 'Lab', 750),
(3, 'Physics Laboratory', 'Lab', 0),
(4, 'Academic Development', 'Miscellaneous', 250),
(5, 'Athletic', 'Miscellaneous', 160),
(6, 'Dental Fee', 'Miscellaneous', 350),
(7, 'Guidance Service', 'Miscellaneous', 50),
(8, 'Library Fee', 'Miscellaneous', 500),
(9, 'Medical Fee', 'Miscellaneous', 350),
(10, 'School & Community', 'Miscellaneous', 30),
(11, 'School ID', 'Miscellaneous', 125),
(12, 'Student Development Service', 'Miscellaneous', 250),
(13, 'Energy Fee', 'Others', 750),
(14, 'Enrollment Fee', 'Others', 500),
(15, 'Internet Fee', 'Others', 350),
(16, 'My Own Discount', 'Downpayment', 0),
(17, 'Early Bird Discount', 'Discount', 30),
(18, 'All Grade 11 Books', 'Others', 5000),
(19, 'Grade 11 Books', 'Books', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `std_invoices`
--

CREATE TABLE `std_invoices` (
  `InvoiceId` varchar(50) NOT NULL,
  `StudentNo` int(50) NOT NULL,
  `DateCreated` varchar(15) NOT NULL,
  `TotalAmount` float NOT NULL,
  `Balance` double NOT NULL,
  `SchoolYear` varchar(15) NOT NULL,
  `Semester` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_invoices`
--

INSERT INTO `std_invoices` (`InvoiceId`, `StudentNo`, `DateCreated`, `TotalAmount`, `Balance`, `SchoolYear`, `Semester`) VALUES
('hahahahahah', 3, '2018-02-25', 5315, 3220.5, '2017-2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `std_pinfo`
--

CREATE TABLE `std_pinfo` (
  `StudentNo` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `MiddleName` varchar(20) DEFAULT '',
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(7) DEFAULT '',
  `BirthDate` varchar(20) DEFAULT '',
  `BirthPlace` varchar(50) DEFAULT '',
  `EmailAddress` varchar(30) DEFAULT '',
  `TelephoneNo` varchar(20) DEFAULT '',
  `ContactNo` varchar(20) DEFAULT '',
  `CityAddress` varchar(100) DEFAULT '',
  `Region` varchar(15) DEFAULT '',
  `ProvincialAddress` varchar(100) DEFAULT '',
  `Country` varchar(30) DEFAULT '',
  `Citizenship` varchar(20) DEFAULT '',
  `Religion` varchar(20) DEFAULT '',
  `MaritalStatus` varchar(20) DEFAULT '',
  `APR` varchar(20) DEFAULT '',
  `Working` tinyint(1) DEFAULT '0',
  `WorkingAddress` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_pinfo`
--

INSERT INTO `std_pinfo` (`StudentNo`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `BirthDate`, `BirthPlace`, `EmailAddress`, `TelephoneNo`, `ContactNo`, `CityAddress`, `Region`, `ProvincialAddress`, `Country`, `Citizenship`, `Religion`, `MaritalStatus`, `APR`, `Working`, `WorkingAddress`) VALUES
(1, 'Christian Jake', 'Golbin', 'Manatad', 'Male', '09/10/1997', 'Cebu CIty', 'manatad@gmail.com', '', '', 'Cebu City', '8', 'Cebu City', 'Philippines', 'Filipino', 'Roman Catholic', 'Single', '', 0, ''),
(2, 'Jay', '', 'Bayarcal', 'Male', '', '', '', '', '', '', 'NONE', '', '', '', '', 'NONE', '', 0, ''),
(3, 'Will', '', 'Smith', 'Male', '', 'USA', '', '', '', '', '7', '', '', '', '', 'Single', '', 0, ''),
(4, 'Steven', 'Aerosmith', 'Tyler', 'Male', '', 'Somewhere', '', '', '', 'Wherever he lives today', 'NCR', '', 'USA', '', '', 'Single', '', 0, ''),
(6, 'Gerard Chemical', 'Romance', 'Way', 'Male', '', '', '', '', '', '', 'NONE', '', '', '', '', 'Single', '', 0, ''),
(7, 'Melvn', 'Benshou', 'Baybayanon', 'Male', '', 'Cebu City', '', '', '', '', '7', '', '', '', '', 'Single', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sys`
--

CREATE TABLE `sys` (
  `id` int(11) NOT NULL,
  `year_start` varchar(255) NOT NULL,
  `year_end` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `switch` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys`
--

INSERT INTO `sys` (`id`, `year_start`, `year_end`, `semester`, `switch`, `date_created`) VALUES
(1, '2017', '2018', 2, 'Inactive', '2018-02-27 21:33:04'),
(2, '2001', '2002', 1, 'Inactive', '2018-03-06 14:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `TransactionNo` int(30) NOT NULL,
  `InvoiceId` varchar(50) NOT NULL,
  `ReferenceNo` varchar(30) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Amount` int(30) NOT NULL,
  `Discount` float NOT NULL,
  `TDate` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`TransactionNo`, `InvoiceId`, `ReferenceNo`, `Description`, `Amount`, `Discount`, `TDate`) VALUES
(10, 'hahahahahah', 'asdfuyuyuyuy', 'Downpayment', 500, 0, '2018-02-25'),
(9, 'dfghdfghdfgh', 'oooooohooooh', 'Downpayment', 500, 0, '2018-02-25'),
(8, 'uvwevwevwe', '3123sdafa', 'Downpayment', 500, 0, '2018-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `switch` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `account_type`, `switch`, `date_created`) VALUES
('1', 'admin', '123456', 'Administrator', 'Active', '2018-01-08 08:20:53'),
('2013-01056', 'vindecode', '123321', 'Administrator', 'Active', '2018-02-27 21:53:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_types`
--
ALTER TABLE `account_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bsc_curriculums`
--
ALTER TABLE `bsc_curriculums`
  ADD PRIMARY KEY (`CurriculumID`);

--
-- Indexes for table `bsc_enrollments`
--
ALTER TABLE `bsc_enrollments`
  ADD PRIMARY KEY (`EnrollmentNo`);

--
-- Indexes for table `bsc_subjects`
--
ALTER TABLE `bsc_subjects`
  ADD PRIMARY KEY (`SubjectCode`);

--
-- Indexes for table `clg_courses`
--
ALTER TABLE `clg_courses`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `clg_curriculums`
--
ALTER TABLE `clg_curriculums`
  ADD PRIMARY KEY (`CurriculumID`);

--
-- Indexes for table `clg_enlistments`
--
ALTER TABLE `clg_enlistments`
  ADD PRIMARY KEY (`EnlistmentID`);

--
-- Indexes for table `clg_profiles`
--
ALTER TABLE `clg_profiles`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `clg_schedules`
--
ALTER TABLE `clg_schedules`
  ADD PRIMARY KEY (`ScheduleID`);

--
-- Indexes for table `clg_subjects`
--
ALTER TABLE `clg_subjects`
  ADD PRIMARY KEY (`SubjectCode`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facil_name` (`facil_name`);

--
-- Indexes for table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`PersonnelID`);

--
-- Indexes for table `shs_curriculums`
--
ALTER TABLE `shs_curriculums`
  ADD PRIMARY KEY (`CurriculumID`);

--
-- Indexes for table `shs_enlistments`
--
ALTER TABLE `shs_enlistments`
  ADD PRIMARY KEY (`EnlistmentID`);

--
-- Indexes for table `shs_enrollments`
--
ALTER TABLE `shs_enrollments`
  ADD PRIMARY KEY (`EnrollmentNo`);

--
-- Indexes for table `shs_profiles`
--
ALTER TABLE `shs_profiles`
  ADD PRIMARY KEY (`LRN`);

--
-- Indexes for table `shs_schedules`
--
ALTER TABLE `shs_schedules`
  ADD PRIMARY KEY (`ScheduleID`);

--
-- Indexes for table `shs_sections`
--
ALTER TABLE `shs_sections`
  ADD PRIMARY KEY (`SectionID`);

--
-- Indexes for table `shs_strands`
--
ALTER TABLE `shs_strands`
  ADD PRIMARY KEY (`StrandCode`);

--
-- Indexes for table `shs_subjects`
--
ALTER TABLE `shs_subjects`
  ADD PRIMARY KEY (`SubjectCode`);

--
-- Indexes for table `std_accounts`
--
ALTER TABLE `std_accounts`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `std_enrollments`
--
ALTER TABLE `std_enrollments`
  ADD PRIMARY KEY (`EnrollmentNo`);

--
-- Indexes for table `std_fees`
--
ALTER TABLE `std_fees`
  ADD PRIMARY KEY (`FeeID`),
  ADD UNIQUE KEY `Description` (`Description`);

--
-- Indexes for table `std_invoices`
--
ALTER TABLE `std_invoices`
  ADD PRIMARY KEY (`InvoiceId`);

--
-- Indexes for table `std_pinfo`
--
ALTER TABLE `std_pinfo`
  ADD PRIMARY KEY (`StudentNo`);

--
-- Indexes for table `sys`
--
ALTER TABLE `sys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`TransactionNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_types`
--
ALTER TABLE `account_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bsc_curriculums`
--
ALTER TABLE `bsc_curriculums`
  MODIFY `CurriculumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `bsc_enrollments`
--
ALTER TABLE `bsc_enrollments`
  MODIFY `EnrollmentNo` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clg_curriculums`
--
ALTER TABLE `clg_curriculums`
  MODIFY `CurriculumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `clg_enlistments`
--
ALTER TABLE `clg_enlistments`
  MODIFY `EnlistmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `clg_schedules`
--
ALTER TABLE `clg_schedules`
  MODIFY `ScheduleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shs_curriculums`
--
ALTER TABLE `shs_curriculums`
  MODIFY `CurriculumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `shs_enlistments`
--
ALTER TABLE `shs_enlistments`
  MODIFY `EnlistmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `shs_enrollments`
--
ALTER TABLE `shs_enrollments`
  MODIFY `EnrollmentNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shs_schedules`
--
ALTER TABLE `shs_schedules`
  MODIFY `ScheduleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `shs_sections`
--
ALTER TABLE `shs_sections`
  MODIFY `SectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `std_accounts`
--
ALTER TABLE `std_accounts`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `std_enrollments`
--
ALTER TABLE `std_enrollments`
  MODIFY `EnrollmentNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `std_fees`
--
ALTER TABLE `std_fees`
  MODIFY `FeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `std_pinfo`
--
ALTER TABLE `std_pinfo`
  MODIFY `StudentNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sys`
--
ALTER TABLE `sys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `TransactionNo` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
