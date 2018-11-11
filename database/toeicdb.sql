-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2018 at 05:14 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toeicdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bailam`
--

CREATE TABLE `bailam` (
  `IdBaiLam` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `MaDe` int(11) NOT NULL,
  `NgayThi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DiemDoc` int(11) NOT NULL,
  `DiemNghe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bailam`
--

INSERT INTO `bailam` (`IdBaiLam`, `IdUser`, `MaDe`, `NgayThi`, `DiemDoc`, `DiemNghe`) VALUES
(1, 22, 1, '2018-09-23 00:00:00', 355, 250),
(2, 26, 2, '2018-09-23 00:00:00', 320, 320),
(3, 19, 2, '2018-09-23 00:00:00', 200, 495),
(4, 22, 1, '2018-10-21 20:49:30', 300, 200),
(5, 1, 1, '2018-10-24 16:14:27', 495, 5),
(6, 1, 1, '2018-10-24 16:58:49', 430, 75),
(7, 2, 1, '2018-10-24 23:27:37', 495, 5),
(8, 2, 1, '2018-10-24 23:39:57', 495, 5),
(9, 1, 2, '2018-10-30 13:57:21', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBinhLuan` int(11) NOT NULL,
  `NguoiDang` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `NgayDang` datetime DEFAULT CURRENT_TIMESTAMP,
  `NgayChinhSua` datetime DEFAULT NULL,
  `MaDe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`MaBinhLuan`, `NguoiDang`, `NoiDung`, `NgayDang`, `NgayChinhSua`, `MaDe`) VALUES
(5, 22, 'Đề thi quá hay!', '2018-09-30 23:11:30', NULL, 1),
(6, 19, 'Không thể diễn tả thành lời!', '2018-09-30 23:11:30', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `MaCauHoi` int(11) NOT NULL,
  `STT` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `MaDe` int(11) NOT NULL,
  `NguoiTao` int(11) NOT NULL,
  `NgayTao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NgayChinhSua` datetime DEFAULT NULL,
  `TrangThai` tinyint(1) NOT NULL DEFAULT '1',
  `LoaiCauHoi` varchar(20) NOT NULL DEFAULT 'NONE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`MaCauHoi`, `STT`, `NoiDung`, `HinhAnh`, `MaDe`, `NguoiTao`, `NgayTao`, `NgayChinhSua`, `TrangThai`, `LoaiCauHoi`) VALUES
(1, 101, 'The new prices are _____ on March 1st.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(2, 102, 'Martin and Scott will give _____ presentation tomorrow.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(3, 103, 'Orders for banquet tickets will be _____ this afternoon. ', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(4, 104, 'Will the last person leaving the office please remember to _____ the lights? ', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(5, 105, 'The Butler Building is _____ the corner of Fifth and Vine.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(6, 106, 'All our steaks are seared in the oven, and then seasoned to _____. ', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(7, 107, 'Would you mind _____ me the phone, please. ', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(8, 108, 'The play\'s long run on Broadway will _____ come to an end tonight.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(9, 109, 'The bank is closed now, _____ you will have to wait until tomorrow to make the deposit.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(10, 110, 'Could I see your driver\'s _____ please?', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(11, 111, 'We\'re _____ copy paper. Could you please order some more?', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(12, 112, 'Lowman Bros. Inc. cordially ____ you to its annual fund-raising dinner. ', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(13, 113, 'The contract _____ on Dec. 31st.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(14, 114, 'If my flight is on time, I should be _____ your office by 2 o\'clock. ', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(15, 115, 'Ace Architecture was honored for its commitment to green, _____ development.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(16, 116, 'Knowledge of computers is a ______ for this position.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(17, 117, 'Juan had just finished ______ the project when Keith walked in.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(18, 118, 'Unlike our competitors, who opened too many stores last year, we need to expand ______.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(19, 119, '______ the economy improves soon, we will have to have another round of layoffs.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(20, 120, 'Have you ever ______ to Geneva?', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(21, 121, 'Increased sales of its new smart phone application have put the firm in the ______ this quarter.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(22, 122, 'You can exchange your item for something of equal or lesser value, provided you have the original ______.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(23, 123, 'Sampson & Sons Inc. will issue ______ annual report on the 19th. ', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(24, 124, 'I ______ while you were working out.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(25, 125, 'Please fill out the form and return it at your ______ convenience.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(26, 126, 'Flying would have ______ almost twice as much as taking the train.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(27, 127, 'I\'ll have the estimate for the painting ready for you in a ______ more days.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(28, 128, 'Congratulations on your _____ to senior vice president.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(29, 129, 'We did not hire John Delany due to ______ lack of previous experience.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(30, 130, 'If Kevin\'s Cleaners ______ be willing to lower their fees by 10 percent, I\'d be willing to contract with them.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(31, 131, 'We named him Washington, ______ the father of our country.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(32, 132, 'We believe that demand is driven largely by ______.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(33, 133, 'Are you ready ______ ? ', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(34, 134, 'Could I have tea ______ coffee?', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(35, 135, 'The company\'s board of directors rejected ACJ\'s hostile ______ bid.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(36, 136, 'Bonus pay is ______ upon the quality of your performance.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(37, 137, 'Mr. Morgan is out of the office right now, ______ I expect him back shortly.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(38, 138, 'A federal ______ prevented Mega Bank\'s financial failure.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(39, 139, 'The bond will mature on Dec. 31st, 2020, or the holder\'s 60th birthday, ______ comes first.', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(40, 140, 'Because the firm was losing money, Susan was ______ from her management position. ', '', 2, 1, '2018-10-26 18:01:19', NULL, 1, 'R-DIENCAU'),
(41, 141, 'You will read four passages of text. In each reading passage there will be three blanks to fill in. You will read four possible choices for each blank. You should read the entire passage to make sure you choose the correct choice in context. \r\n<br><br>\r\nLetter \r\n<br><br>\r\nJan. 15th, 2012<br>\r\nMidwest Bank<br>\r\n2244 Main St., Omaha, NB 44331<br>\r\nTel: (818) 555-8192 \r\n<br><br>\r\nRudolph Driscoll<br>\r\n874 Tumbleweed Lane, #A-103<br>\r\nOmaha, NB 44332 \r\n<br><br>\r\nDear Mr. Driscoll: \r\n<br><br>\r\nWe are writing to inform you that check No. 1384, in the __________ of $2,500, was presented for payment on Jan. 8th against an account balance of $2,275. In accordance with your overdraft protection provision, we have paid the check and charged your account a $30 overdraft fee.<br>', '', 2, 1, '2018-10-29 14:42:54', NULL, 1, 'R-DIENDOANVAN'),
(42, 142, 'To avoid further action, please make a deposit to your checking account as soon as possible. If you __________ already done so, you may disregard this notice. ', '', 2, 1, '2018-10-29 14:50:26', NULL, 1, 'R-DIENDOANVAN'),
(43, 143, 'We appreciate your patronage of Midwest Bank. If you have any questions, or if there is a way we can service your needs, call our customer assistance line __________ 555-7700 between 9 a.m. and 5 p.m. Monday to Friday, or come into one of our six Omaha branches. ', '', 2, 1, '2018-10-29 14:51:18', NULL, 1, 'R-DIENDOANVAN'),
(44, 144, 'ECHO CLEAN<br><br>\r\nAre you too busy to clean? \r\nWe understand. \r\n<br><br>\r\nSo relax, and leave the cleaning to us! Our professional, reliable staff will leave your home feeling like new. We use only100-percent safe, __________ friendly products, so you can rest assured there will be no harmful chemicals or dangerous liquid reside left behind.\r\n', '', 2, 1, '2018-10-29 14:52:34', NULL, 1, 'R-DIENDOANVAN'),
(45, 145, 'Our prices are among the lowest in the region. And, if you mention this flier, we will give you a 15-percent discount on your first cleaning. Plus, if you are not completely satisfied with our services, we will come again and re-clean the areas you specify free of __________!', '', 2, 1, '2018-10-29 14:52:34', NULL, 1, 'R-DIENDOANVAN'),
(46, 146, 'Why not give us a try? Call 555-4372 for a free cleaning estimate. We are open 7 a.m. to 5 p.m. Monday __________ Friday, and 9 a.m. to 4 p.m. on Saturdays. You can also visit us online at www.ecoclean.com. Isn\'t it about time you had the break you deserve? ', '', 2, 1, '2018-10-29 14:53:25', NULL, 1, 'R-DIENDOANVAN'),
(47, 147, 'Memo \r\n<br><br>\r\nTo: All managers \r\nFrom: Dennis Kruger, CEO \r\nRe: Employee performance reviews \r\n<br><br>\r\nAll of you __________ have received forms for annual employee evaluations. If you haven\'t, contact Candice in human resources as soon as possible. Evaluation forms must be completed by Jan. 10th and returned to human resources. Thank you for your prompt cooperation. \r\n', '', 2, 1, '2018-10-29 14:54:21', NULL, 1, 'R-DIENDOANVAN'),
(48, 148, 'You will notice that this year\'s forms contain a new section that rates employee initiative and group participation. Please be sure to take a few minutes __________ this section before beginning performance reviews. Also remember to have each employee sign the review form.  ', '', 2, 1, '2018-10-29 14:54:21', NULL, 1, 'R-DIENDOANVAN'),
(49, 149, 'I will be conducting manager evaluations the week __________ Christmas and New Year\'s, and I hope to have a schedule made up by the 15th.', '', 2, 1, '2018-10-29 14:54:47', NULL, 1, 'R-DIENDOANVAN'),
(50, 150, 'E-mail \r\n<br><br>\r\nTo: dscott@aceconsulting.net \r\nFrom: tflowers@jbsanders.com \r\nSubject: confirmation \r\n<br><br>\r\nDear Dave Scott, \r\nThis is to confirm the __________ reached this morning in the conference call between yourself and our president, Jed Sanders. If any of this information is incomplete or inaccurate, please let us know immediately. \r\n', '', 2, 1, '2018-10-29 14:55:16', NULL, 1, 'R-DIENDOANVAN'),
(51, 151, 'Ace Consulting has agreed to provide 40 hours of consultation for the JB Sanders Corporation, commencing on March 1st, at a rate of $120 an hour. Payment will be sent once a month upon __________of invoice from Ace Consulting. Ace agrees that invoices must be submitted no later than the 20th of each month.', '', 2, 1, '2018-10-29 14:55:50', NULL, 1, 'R-DIENDOANVAN'),
(52, 152, 'JB Sanders Corporation has agreed to __________ up a formal contract and send it to Dave Scott for his approval by the end of the week. This contract will remain in effect until Ace Consulting has fulfilled its commitment. At that time, the contract may be extended upon approval of both parties, or a new arrangement may be negotiated.', '', 2, 1, '2018-10-29 14:55:50', NULL, 1, 'R-DIENDOANVAN'),
(53, 153, '<b>Questions 153-154 refer to the following advertisement.</b>\n<br><br>\nNEW \nCineMatic ST Series IV digital home theater system \n<br><br>\nExperience movies the way they were meant to be heard. \n<br><br>\nImmerse yourself in high-quality sound with the easiest home theater solution from Techright.<br>\nSound can bring everything you watch on TV to life with vivid detail -- slamming doors, screeching tires, blaring sirens, ringing church bells. But probably not if you\'re listening through the speakers built into your TV.  That\'s why Techright developed the NEW CineMatic ST Series IV digital home theater speaker system.<br>With a single connection to your TV, you can enjoy the full home theater experience with your favorite shows, movies, and sporting events.<br>\nWant to hear what you\'ve been missing? Experience the new CineMatic ST Series IV system in your own home risk-free for 30 days, absolutely free, and bring out the full audio potential of your HDTV. You can use your own major credit card to make 12 easy payments, with no interest charges from Techright.<br>\nFree shipping with your order.  \n<br><br>\nTo order or learn more: 1-800-555-2323.<br>\nTechright.com/CineMatic \n<br><br>\nTechright<br>\nBetter sound through innovation\n<br><br>\nQuestion: What is being offered?\n', '', 2, 1, '2018-10-29 14:58:35', NULL, 1, 'R-HOIDOANVAN'),
(54, 154, 'How can customers order? ', '', 2, 1, '2018-10-29 14:58:35', NULL, 1, 'R-HOIDOANVAN'),
(55, 155, '<b>Questions 155-157 refer to the following memo.</b>\n<br><br>\nMEMO<br>\nTo: All staff<br>\nFrom: James McGuire, VP<br>\nRe: Office remodeling \n<br><br>\nRemodeling work on the third-floor offices will begin the first of next month. While this work is in progress, third-floor workers will be housed on other floors as follows: the sales department will move to the second floor, and graphic design will move to the fourth floor. Supervisors will arrange these accommodations and show staff in those departments their temporary work stations. <br>\nWe expect the remodel to take approximately three weeks. During this time, we appreciate your cooperation in sharing space and working together. While the arrangement presents some logistical challenges, we are confident that we can meet them and work with minimal disruption to our normal routine during the remodeling period.  <br>\nTo make this transition as smooth as possible, it would be greatly appreciated if the third floor could be vacated, and everyone were in their new stations and ready to work, at 8 a.m. on the First. If there are questions or concerns with the new arrangement, be sure to tell your supervisors ASAP so we can tackle the problems ahead of time.  <br>\nThanks in advance for your patience and cooperation. Once the work is finished on the third floor, we are sure you\'ll agree that it was worth the time and trouble.  <br>\nBest, <br>\nAlan Shepard, VP\n<br><br>\nQuestion: What is the main purpose of this memo?\n', '', 2, 1, '2018-10-29 15:03:14', NULL, 1, 'R-HOIDOANVAN'),
(56, 156, 'What can be inferred about the company? ', '', 2, 1, '2018-10-29 15:03:14', NULL, 1, 'R-HOIDOANVAN'),
(57, 157, 'What does the writer request readers do? ', '', 2, 1, '2018-10-29 15:03:33', NULL, 1, 'R-HOIDOANVAN'),
(58, 158, '<b>Questions 158-161 refer to the following note.</b>\n <br><br>\nDear Jack, <br>\nJust a quick congratulatory note to let you know how proud I am of ZipTech\'s recent success. I know it was the result of lots of hard work. You should be proud of yourself and your staff.  <br>\nI knew when you left last year that great things were in store for you, though I must admit I didn\'t know they\'d come this quickly. Wow! Sales of $2 million and BizTimes\' \"Best New Business of the Year\" award?! \nThat was more than any of us here could have imagined.  <br>\nI remember when you started as an intern five years ago. Time flies, doesn\'t it? I knew from the moment we met that you had the talent and ambition to succeed with your own company. Now that you\'ve had a taste of it, don\'t rest on your laurels. I don\'t have to worry; I\'m sure you won\'t.  <br>\nIt would be great to get together again when you have time. I\'ll treat you to lunch. I know it\'s a busy time of year. Please give me a call when you have time. I look forward to it.  \nBest,  <br>\nDennis <br><br>\nQuestion: What can be inferred about Dennis and Jack? \n', '', 2, 1, '2018-10-29 15:05:39', NULL, 1, 'R-HOIDOANVAN'),
(59, 159, 'What is the main purpose of the note? ', '', 2, 1, '2018-10-29 15:05:39', NULL, 1, 'R-HOIDOANVAN'),
(60, 160, 'What is true of ZipTech? ', '', 2, 1, '2018-10-29 15:07:23', NULL, 1, 'R-HOIDOANVAN'),
(61, 161, 'What advice does Dennis offer Jack? ', '', 2, 1, '2018-10-29 15:07:23', NULL, 1, 'R-HOIDOANVAN'),
(62, 162, '<b>Questions 162-163 refer to the following coupon.</b>\n<br><br>\nSUBmission Sandwiches <br>\n50% OFF* <br>\nAny Choose 2 \n <br><br>\nChoose 2 for $5 \n <br><br>\nClub Sandwiches Chopped salads Bowls of Soup Mini-sandwiches  \nPesto Turkey Chicken Caesar Broccoli Cheese Alpine Chicken  \nBeef & Cheddar Classic Cobb Chicken Noodle Sonoma Turkey  \nTuna Steak & Bleu Tomato Basil Bistro Steak Melt  \nItalian Honey Mustard Chicken Chili Italiano  \n* with the purchase of a regular fountain drink  \nValid in-store only expires 12/31/2010 \n <br><br>\nQuestion: How can a customer receive a 50-percent discount? \n', '', 2, 1, '2018-10-29 15:09:02', NULL, 1, 'R-HOIDOANVAN'),
(63, 163, 'Which of the following is NOT true? ', '', 2, 1, '2018-10-29 15:09:02', NULL, 1, 'R-HOIDOANVAN'),
(64, 164, 'Questions 164-165 refer to the following advertisement.</b>\n <br> <br>\nDarby\'s <br>\nAsk your friends about us \n <br><br>\n\"The service is consistently outstanding. The friendly wait staff always makes us feel at home.\"  -- Evan G., Jackson, MI  \n <br><br>\n\"Kids eat free on Wednesdays and Thursdays. With a family of seven, you can\'t beat that.\"  -- Monica Carr, Seattle, WA  \n <br><br>\n\"Darby\'s are always clean and bright -- even the bathrooms. We feel comfortable there.\"  -- Michael Jenson, Chicago, ILL  \n <br><br>\n\"My husband and I LOVE the combo plates. There are so many good choices, we\'re never bored.\"  -- Tamara Goldstein, Phoenix, AZ \n <br><br>\nQuestion: What type of business is Darby\'s? \n', '', 2, 1, '2018-10-29 15:11:08', NULL, 1, 'R-HOIDOANVAN'),
(65, 165, 'What is mentioned in the advertisement? ', '', 2, 1, '2018-10-29 15:11:08', NULL, 1, 'R-HOIDOANVAN'),
(66, 166, '<b>Questions 166-168 refer to the following movie review.</b>\n<br><br>\nHind Sight <br>\nValley Cinema: 11, 1:45, 4, 6:30, 9  <br>\nA remake of the murdered French filmmaker Claude Chemmert\'s 1987 drama of the same name, \"Hind Sight,\" directed by Stephen Toussant (who ought to get behind the camera more often), gets a lot of mileage out of the confident and wistful performances of Susan Evans and Sean Robinson as Jan and Dave, a married couple who meet up for various rendezvous in Dave\'s restaurant while engaged in different role-playing fantasies. Gradually, we learn that the two are hiding and flirting in other personas so they can reconnect after a horrific experience, though by the time that would-be revelation comes, the movie - which had to wait two years to find a distributor - is about more than secrets. It\'s about watching two always-fine actors do a lot with very little.  \n <br><br>\n-- John Hartzell \n <br><br>\n \nQuestion: What does John Hartzell suggest about Stephen Toussant? \n', '', 2, 1, '2018-10-29 15:13:10', NULL, 1, 'R-HOIDOANVAN'),
(67, 167, 'The phrase \"gets a lot of mileage\" is closest in meaning to', '', 2, 1, '2018-10-29 15:13:10', NULL, 1, 'R-HOIDOANVAN'),
(68, 168, 'What is John Hartzell\'s opinion of the movie? ', '', 2, 1, '2018-10-29 15:13:57', NULL, 1, 'R-HOIDOANVAN'),
(69, 169, '<b>Questions 169-172 refer to the following letter.</b><br><br>\nDear Subscribing Family: <br>\nWe know you\'d be the first to say you have an award-winning kid. Which is why only an award-winning magazine is good enough -- SCIENCE ILLUSTRATED FOR KIDS.  <br>\nIt\'s satisfying to know that kids love a magazine that has won so many prestigious awards and is playing a role in promoting science education across the country. Over 10 million kids enjoy our magazine every month, and critics agree: SCIENCE ILLUSTRATED FOR KIDS is a great read!  <br>\nNow it\'s time to renew your subscription. Just fill out the attached reply card and mail it to us with your payment in the enclosed envelope. Be sure to mail by the date shown so your child will not miss out on any of the upcoming excitement.  <br>\nSCIENCE ILLUSTRATED FOR KIDS is a great value for the whole family. Kids love learning about fascinating science topics. Parents feel great because it brings families together by sharing an interest in science. <br>Spend some time reading the next issue your young scientist and see why children get so involved with SCIENCE <br>\nILLUSTRATED FOR KIDS!  <br>\nThank you for subscribing to SCIENCE ILLUSTRATED FOR KIDS. We\'re very excited about our upcoming issues. We\'ll have great stories, superb illustrations, easy-to-do experiments, and features your youngster won\'t want to miss.  \n <br><br>\nSincerely, <br>\nMichael Barton  \n <br><br>\nMichael Barton  <br>\nCIRCULATION DIRECTOR <br><br>\nWhat is the purpose of the letter?', '', 2, 1, '2018-10-29 15:15:31', NULL, 1, 'R-HOIDOANVAN'),
(70, 170, 'What does the writer ask readers to do?', '', 2, 1, '2018-10-29 15:16:38', NULL, 1, 'R-HOIDOANVAN'),
(71, 171, 'How does the writer promote the magazine? ', '', 2, 1, '2018-10-29 15:16:38', NULL, 1, 'R-HOIDOANVAN'),
(72, 172, 'What does the writer say about upcoming issues? ', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(73, 173, '<b>Questions 173-175 refer to the following minutes of a meeting.</b>\n <br><br>\nHealthy Habits LLC <br>\nBoard Meeting Minutes: Feb. 1, 2010 <br>\n7 p.m., board room <br>\n <br><br>\nBoard Members: <br>\nPresent: Bhata Bhatacharia, Jon White Bear, Douglas Carver, Elizabeth Drucker, Pat Kyumoto, Jack Porter, Mary \nRifkin and Leslie Zevon Absent: Melissa Johnson <br>\nQuorum present? Yes <br>\n <br><br>\nOthers Present: <br>\nExec. Director: Sheila Swanson <br>\nOther: Susan Johns, Consulting Accountant <br>\n <br>\nProceedings: . Meeting called to order at 7:00 p.m. by Chair, Elizabeth Drucker . (Last month\'s) meeting minutes were amended and approved \n <br><br>\n. Chief Executive\'s Report: <br>\n-	Recommends that if we not able to find a new facility by the end of this month, the organization should stay in the current location over the winter. After brief discussion, Board agreed. <br>\n-	Staff member, Jackson Browne, and Swanson attended the National Practitioner\'s Network meeting in Atlanta last month and gave a brief extemporaneous presentation. Both are invited back next year to give a longer presentation about our organization. After brief discussion, Board congratulated Swanson and asked her to pass on their congratulations to Browne as well. <br>\n-	Drucker asserts that our organization must ensure its name is associated with whatever materials are distributed at that practitioner\'s meeting next year. The organization should generate revenues where possible from the materials, too. <br>\n-	Swanson mentioned that staff member, Sheila Anderson\'s husband is ill and in the hospital. MOTION to send a gift to Anderson\'s husband, expressing the organization\'s sympathy and support, seconded and passed. \n. Finance Committee report provided by Chair, Elizabeth Drucker: <br>\n-	Drucker explained that consultant, Susan Johns, reviewed the organization\'s bookkeeping procedures and found them to be satisfactory, in preparation for the upcoming yearly financial audit. Funds recommends that our company ensure the auditor provides a management letter along with the audit financial report. <br>\n- Drucker reviewed highlights, trends and issues from the balance sheet, income statement and cash flow statement. Issues include that high accounts receivables require Finance Committee attention to policies and procedures to ensure our organization receives more payments on time. After brief discussion of the issues and suggestions about how to ensure receiving payments on time, MOTION to accept financial statements, seconded and passed. <br>\n. Board Development Committee\'s report provided by Chair, Douglas Carver: <br>\n-	Carver reminded the Board of the scheduled retreat coming up in three months, and provided a drafted retreat schedule for board review. MOTION to accept the retreat agenda, seconded and passed. <br>\n-	Carver presented members with a draft of the reworded By-laws paragraph that would allow members to conduct actions over electronic mail. Carver suggested review and a resolution to change the By-laws accordingly. Kyumoto suggested that Swanson first seek legal counsel to verify if the proposed change is consistent with state statute. Swanson agreed to accept this action and notify members of the outcome in the next Board meeting. <br>\n. Other business: <br>\n-	Porter noted that he was working with staff member, Jacob Smith, to help develop an information management systems plan, and that two weeks ago he (Porter) had mailed members three resumes from consultants to help with the plan. In the mailing, Porter asked members for their opinions to help select a consultant. Porter asked members for their opinions. (NOTE: Zevon noted that she was also a computer consultant and was concerned about conflict of interest in her Board role regarding this selection, and asked to be ABSTAINED from this selection. Members agreed.) The majority of members agreed on Lease-or-Buy Consultants. MOTION to use Lease-or-Buy Consultants, seconded and passed. <br>\n-	Swanson announced that she had recently hired a new secretary, Karla Writewell. <br>\n. Assessment of the Meeting: <br>\n-	Kyumoto noted that the past three meetings have run over the intended two-hour time slot by half an hour. \nHe asked members to be more mindful and focused during discussions, and suggested that the Board Development Chair take an action to identify solutions to this issue. Chair, Carver, agreed. <br>\n. Meeting adjourned at 9:30 p.m. <br>\n. Minutes submitted by Secretary, Bhata Bhatacharia. <br>\n<br><br>\nQuestion: What does the chief executive recommend about the organization? \n', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(74, 174, 'What did Douglas Carver suggest doing?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(75, 175, 'Why did Leslie Zevon abstain from selecting a computer consultant? ', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(76, 176, '<b>Questions 176-180 refer to the following page from a brochure.</b>\n <br><br>\n* * *  \n <br><br>\nTim\'s Travel Packages \n <br><br>\nCenturion Hotel \n <br><br>\nBasic -- Three days and two nights double bed. Complimentary breakfast. Twenty-percent discount on rental car. Two-for-one coupon for one day at Awesome World theme park. $250 \n <br><br>\nDeluxe -- Three days and two nights queen bed. Complimentary breakfast. Thirty-percent discount on rental car. Free one-day admission for two at Awesome World theme park. $350 \n <br><br>\nGrande -- Three days and two nights king bed suite. Complimentary breakfast and one dinner. Fifty-percent discount on rental car. Two-for-one admission for three days at Awesome World theme park. $500 \n <br><br>\nSuper Grande -- Three days and two nights in a presidential suite. Complimentary breakfasts and dinners. Free car rental. Free three-day passes for two to Awesome World. $750 \n <br><br>\n-- Prices are per person. \n-- All packages include transportation to and from the airport, and free daily local newspaper delivered to your door. \n <br><br>\nQuestion: Which package includes airport transportation? \n', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(77, 177, 'What is true of the Grande package? ', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(78, 178, 'For three people, how much would the Basic Package cost apiece?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(79, 179, 'What can be inferred about the Centurion Hotel?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(80, 180, 'What is NOT true of the Deluxe Package?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(81, 181, '<b>Questions 181-185 refer to the following article and letter.</b>\n<br><br>\nManufacturing Magazine \nVolume 33, No. 4 \nApril 2010 \n <br><br>\nRevolutionary plastic \nBy Adam Munster \n <br><br>\nA motto at EarthFirst Products Inc. is to ‘go green wherever you are.’ In this case, wherever includes the cash register. <br>\nThe manufacturer of environmentally-friendly plastics, started six years ago with $200,000 in seed money, projects revenues of $6 million this year and about $10 million the next. But EarthFirst President Tim Orsborne does not expect the growth to stop there.  <br>\n‘The sky\'s the limit,’ said Orsborne. ‘In the world of plastic, the potential is enormous. People use disposable foodservice items every day. It\'s a gigantic market.’  <br>\nEarthFirst carved its niche in this estimated $15 billion-a-year industry by making biodegradable plastic bags from natural plant and vegetable sources rather than petroleum. It has since expanded into cutlery, including plates, trays, cups, and take-out boxes. Its website claims that if EarthFirst made all plastic disposable products in America, it could reduce annual oil consumption by 350 million barrels.  <br>\nThe company uses a blend of organic polymers, proteins, and plant starches such as corn and tapioca to make products that biodegrade in landfills within 36 months. Traditional plastic bags, made of high-density polyethylene, do not biodegrade and persist on the planet up to 1,000 years, according to Chicago-based ReusableBags.com.  More than 200 Taco Loco restaurants use EarthFirst\'s products, and the company recently struck similar deals with eight Office Universe Business Centers and 128 Super Store delicatessens.  \nDepending on the market, Orsborne said EarthFirst goods sell in grocery stores for about the same to 10 percent more than traditional plastic cutlery, plates, and cups. His goal is to give businesses and retail customers a ‘green plastic’ alternative, then let them decide if it\'s worth the slightly higher price.  <br>\nOrsborne said EarthFirst is also testing compostable products -- bioplastics that decompose within 180 days in a commercially controlled composting facility. But since there are only 48 such facilities in the United States, the chief focus will continue to be on biodegradable plastics.  <br>\n‘We\'re becoming the incubator for big plastic producers out there. We want to make sure that our core values are built into the product,’ Orsborne said.  <br>\n‘Did we develop sustainable materials? Sustainable packaging? I want to be able to reduce our carbon footprint.’  <br>\n* * *  <br>\nLetters to the Editor<br>\nDear Editor: <br>\nRegarding the article in your April issue about EarthFirst plastic products: Bravo for Tim Orsborne!  \nEven though they cost more, EarthFirst plastic forks, knives, spoons and plates are well worth it. I bought some for our company party last month. My supervisor initially complained about the price, but after I showed her the article, she enthusiastically supported my decision.  <br>\nLooking at the huge mound of dirty dishes afterward, it was comforting to know that they would biodegrade back into the soil, instead of sitting atop a pile of trash for years and years.  <br>\nWe all need to do our part to help the environment. Buying EarthFirst products is a small but reasonable step toward attaining that end. Keep up the good work, Mr. Orsborne!  <br>\nBryan Bosworth  <br>\nOmaha, Neb. (181) <br>\nWhy does Tim Orsborne expect EarthFirst to keep growing?\n', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(82, 182, 'In the article, the word ‘biodegradable’ in paragraph 4, line 2, is closest in meaning to', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(83, 183, 'What is Bryan Bosworth\'s opinion of EarthFirst products?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(84, 184, 'Why does Bryan Bosworth mention his supervisor?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(85, 185, 'According to the article, what is true of traditional plastic bags?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(86, 186, '<b>Questions 186-190 refer to the following delivery order and email reply.</b><br><br>\nHome Matrix \n <br><br>\nDelivery Order \n <br><br>\nDelivery number 4706-375558V36 <br>\nRef # Item description ordered delivered <br>\nR01 R13 insulation, 15 in. roll, 40 sq. ft. 12.00 12.00 <br>\nR02 Pocket door frame 1.00 1.00 <br>\nR03 Cotton canvas drop cloth 1.00 1.00 <br>\nR04 N-95 drywall sanding respirator 1.00 1.00 <br>\nR05 H-17 5’ CE IC airtight housing 5.00 5.00 <br>\nR06 Int. PVA Primer 5 gal. 1.00 1.00 <br>\nR07 1/2 in. 4x8 drywall--tapered edge 50.00 40.00 back order <br>\nR08 Decra rotary dimmer, white 1.00 1.00 <br>\nR09 New work box, 1 gang 22.5 CU each 30.00 30.00 <br>\nR10 T49 - 6 ‘ CE airtight one-piece metal 8.00 8.00 <br>\n <br>\nWas there any damage to property or product? yes __X____ no ______ \n <br><br>\nIf yes, please clarify: <br>\nItem R02 is chipped on the right side_____________________________________________ <br>\nItem R04 arrived with a broken cover_____________________________________________ \n <br><br>\nI hereby acknowledge receipt of the above items in the quantities shown in the ‘delivered’ column above \n <br><br>\nJoe Buchanan____________ customer\'s name (please print) Marcos Ramone_______ driver\'s signature <br>\nJoe Buchanan____________ customer\'s signature <br>\n <br><br>\nNov. 30th, 2009 to: customerservice@homematrix.com <br>\nfrom: jbuc@hotmail.com re: order no. 4706-375558V36 <br>\n <br>\nTo Whom It May Concern, \n <br><br>\nThe above-referenced order was delivered to my house on Nov. 22nd. At that time, I noted that two of the items were damaged. Please see the attached delivery order form. <br>\nThe driver informed me that replacements for those items would arrive within the next three to four days. To date, I have not received them. I telephoned your store on the 25th, and the person I spoke with said my order was ‘in process’ and would be delivered soon. <br>\nIn addition to the damaged items, I am waiting for 10 more sheets of half-inch 4x8 drywall, which did not arrive in the initial delivery. <br>\nI would greatly appreciate your prompt attention to this matter, as I need these items to start my homeimprovement project. Could you please phone me at 555-9982 as soon as possible? \n <br><br>\nThank you, <br>\nJoe Buchanan  <br><br>\nQuestion: According to the delivery form, which item was not fully delivered? \n', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(87, 187, 'What was the problem with the pocket door frame?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(88, 188, 'What is the main purpose of the e-mail?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(89, 189, 'In the e-mail, the word ‘prompt’ in paragraph 4, line 1, is closest in meaning to', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(90, 190, 'Why weren\'t 10 sheets of drywall able to be delivered?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(91, 191, '<b>Questions 191-195 refer to the following public notice and response</b><br><br>\nNOTICE  <br>\nBus route change <br>\nBeginning Monday, May 5th, the number 312 bus will be changing its route and pick-up times. On Main Street, the bus will no longer stop at Elm, Sycamore, and Fir streets. It will add stops at Pine and Spruce streets. <br>\nAlso, the 312 bus will travel east and west along Second Avenue, instead of Third. It will continue to stop at the same cross streets. <br>\nFinally, the bus will be changing the timing of its stops. Starting with the current 6 a.m. run, the 312 will now arrive at each stop on the quarter hour, instead of the half. The bus will continue to operate 12 hours daily, between 6 a.m. and 6 p.m. <br>\nWe hope these changes will make the 312 more convenient for more people. The new 312 schedule is now available for free at all city 24/7 convenience stores. To see the schedule posted online, visit www.citybus.com. If you have any questions or comments about the changes, please call 555-8444 between 8 a.m. and 5 p.m. Monday through Friday, or email supervisor@citybus.com. <br>\n <br>\nTo: supervisor@citybus.com <br>\nFrom: danadavis@jmail.net <br>\nSubject: Bus 312 route change <br>\n <br>\nHello, <br>\nI\'m writing in regard to the recent changes for city bus 312. I have been riding the 312 for about three years now, catching the 7 o\'clock bus at the Main and Elm stop each morning. <br>\nI\'m dismayed at the changes, because the bus will no longer stop at Main and Elm. The stop has moved to Pine Street, which is nearly three blocks away from Elm. And uphill, to boot! What was the city\'s thinking in cutting down the number of stops along Main? <br>\nAlso, the new timing of the 312 stops is inconvenient for me. I start work at 7:30. Catching the bus at 7 left me plenty of time to get to work, even if traffic was bad. Catching it at 7:15 threatens to make me later for work and stresses me out. Catching it earlier, at 6:45, gets me to work too soon while forcing me to wake up earlier than necessary. <br>\nI am sure there are others who share my concerns. Hopefully near future the city will consider making alterations in the new route and stop times based on customer comments. <br>\n <br>\nThank you for your consideration, Dana <br>\nDavis <br><br>\nQuestion: According to the notice, what time will the 312 bus make its first stop on May 5th? \n', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(92, 192, 'Where can people get a free copy of the new bus schedule?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(93, 193, 'In the e-mail, the word ‘dismayed’ in paragraph 2, line 1, is closest in meaning to', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(94, 194, 'What is Dana Davis\' complaint about the new bus stop at Main and Pine?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(95, 195, 'What can be inferred from the notice about Main Street?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(96, 196, '<b>Questions 196-200 refer to the following schedule and notice.</b><br><br>\n	<img src=\'Toeic-UPLOAD/images/2/196.jpg\'>\n<br>For more information about any of these programs, call SF Fitness at 502-913-2735. <br>\nFor the latest updates, including schedule changes and special events, call our 24-hour automated information line at 502-913-2736. \n <br><br>\nNOTICE <br>\nSF Fitness will be closed for Thanksgiving on Thursday, Nov. 26th. All classes that day are cancelled. Some may be rescheduled, please contact your instructor for further details. <br>\nOn Friday, Nov. 27th, the 9 a.m. Aqua Fit and 5:45 p.m. Boot Camp Conditioning classes have been cancelled. On Saturday, Nov. 28th, the 9 a.m. Aqua Fit class has been cancelled, and the 11 a.m. yoga class has been postponed until 1 p.m., due to air-duct cleaning in the yoga room. <br>\nWant to sign up for classes, which are free to SF Fitness members? See Vicki at the front desk, or register online at www.sffintess.net. <br><br>\nQuestion: What is the main purpose of the notice?  \n', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(97, 197, 'How many times will the Aqua Fit class meet during Thanksgiving week?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(98, 198, 'According to the schedule, which of the following is true?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(99, 199, 'According to the notice, why was the yoga class rescheduled?', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(100, 200, 'How can someone learn more about a class? ', '', 2, 1, '2018-10-29 15:34:43', NULL, 1, 'R-HOIDOANVAN'),
(101, 1, '<img src=\'Toeic-UPLOAD/images/2/1.png\'>', '', 2, 1, '2018-10-31 11:51:45', NULL, 1, 'L-HINHANH'),
(102, 2, '<img src=\'Toeic-UPLOAD/images/2/2.png\'>', '', 2, 1, '2018-10-31 11:51:45', NULL, 1, 'L-HINHANH'),
(103, 3, '<img src=\'Toeic-UPLOAD/images/2/3.png\'>', '', 2, 1, '2018-10-31 11:54:13', NULL, 1, 'L-HINHANH'),
(104, 4, '<img src=\'Toeic-UPLOAD/images/2/4.png\'>', '', 2, 1, '2018-10-31 11:54:13', NULL, 1, 'L-HINHANH'),
(105, 5, '<img src=\'Toeic-UPLOAD/images/2/5.png\'>', '', 2, 1, '2018-10-31 11:54:13', NULL, 1, 'L-HINHANH'),
(106, 6, '<img src=\'Toeic-UPLOAD/images/2/6.png\'>', '', 2, 1, '2018-10-31 11:54:13', NULL, 1, 'L-HINHANH'),
(107, 7, '<img src=\'Toeic-UPLOAD/images/2/7.png\'>', '', 2, 1, '2018-10-31 11:54:13', NULL, 1, 'L-HINHANH'),
(108, 8, '<img src=\'Toeic-UPLOAD/images/2/8.png\'>', '', 2, 1, '2018-10-31 11:54:13', NULL, 1, 'L-HINHANH'),
(109, 9, '<img src=\'Toeic-UPLOAD/images/2/9.png\'>', '', 2, 1, '2018-10-31 11:54:13', NULL, 1, 'L-HINHANH'),
(110, 10, '<img src=\'Toeic-UPLOAD/images/2/10.png\'>', '', 2, 1, '2018-10-31 11:54:13', NULL, 1, 'L-HINHANH'),
(111, 11, '', '', 2, 1, '2018-10-31 12:04:53', NULL, 1, 'L-HOIDAP'),
(112, 12, '', '', 2, 1, '2018-10-31 12:04:53', NULL, 1, 'L-HOIDAP'),
(113, 13, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(114, 14, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(115, 15, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(116, 16, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(117, 17, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(118, 18, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(119, 19, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(120, 20, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(121, 21, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(122, 22, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(123, 23, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(124, 24, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(125, 25, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(126, 26, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(127, 27, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(128, 28, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(129, 29, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(130, 30, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(131, 31, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(132, 32, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(133, 33, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(134, 34, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(135, 35, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(136, 36, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(137, 37, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(138, 38, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(139, 39, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(140, 40, '', '', 2, 1, '2018-10-31 12:07:46', NULL, 1, 'L-HOIDAP'),
(141, 41, '<b>QUESTION 41-43 REFER TO THE FOLLOWING CONVERSATION</b><br><br>\nQuestion: What would the man like Julie to do?', '', 2, 1, '2018-11-01 12:16:40', NULL, 1, 'L-HOITHOAI'),
(142, 42, 'What will the man do this afternoon?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(143, 43, 'What time will the man start his appointment this afternoon?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(144, 44, '<b>QUESTION 44-46 REFER TO THE FOLLOWING CONVERSATION</b><br><br> Question: What kind of company does the man work for?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(145, 45, 'How does the man explain the change in the woman\'s bill?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(146, 46, 'What information does the man ask the woman for?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(147, 47, '<b>QUESTION 47-49 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: What is the celebration for?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(148, 48, 'When will the celebration start?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(149, 49, 'Where will the woman go before the party?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(150, 50, '<b>QUESTION 50-52 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: Why is William happy?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(151, 51, 'What does William hope to do?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(152, 52, 'What is William working on these days?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(153, 53, '<b>QUESTION 53-55 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: Where is the conversation most likely taking place?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(154, 54, 'What does the assistant offer to do?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(155, 55, 'What will be delivered to the conference room?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(156, 56, '<b>QUESTION 56-58 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: Who most likely is the man?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(157, 57, 'Where is the woman going?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(158, 58, 'How does the man suggest lowering the admission price?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(159, 59, '<b>QUESTION 59-61 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: What color monitors are available now?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(160, 60, 'How much does it cost to increase the size of the monitor?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(161, 61, 'When can the man expect to receive his monitor?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(162, 62, '<b>QUESTION 62-64 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: What problem is the man faced with?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(163, 63, 'When did the woman receive her parking permit?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(164, 64, 'What does the woman suggest the man do?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(165, 65, '<b>QUESTION 65-67 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: Where most likely does this conversation take place?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(166, 66, 'What would the woman like to do?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(167, 67, 'Why did the man visit New York?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(168, 68, '<b>QUESTION 68-70 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: What is the man\'s problem?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(169, 69, 'Where will the man probably go next?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(170, 70, 'Where is the technical support staff office located?', '', 2, 1, '2018-11-01 12:30:32', NULL, 1, 'L-HOITHOAI'),
(171, 71, '<b>QUESTION 71-73 REFER TO THE FOLLOWING CONVERSATION</b><br><br>\nQuestion: What is the reason for the call?', '', 2, 1, '2018-11-01 12:31:49', NULL, 1, 'L-NOICHUYEN'),
(172, 72, 'What is Mr. Clifford asked to do?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(173, 73, 'When does Katie expect to hear from Mr. Clifford?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(174, 74, '<b>QUESTION 74-76 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: Who most likely is the speaker?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(175, 75, 'How many staff will the company employ when it opens?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(176, 76, 'Where was the first facility?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(177, 77, '<b>QUESTION 77-79 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: Where most likely are the visitors?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(178, 78, 'What will happen at 2:00?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(179, 79, 'How long will the visitors be on their own?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(180, 80, '<b>QUESTION 80-82 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: What kind of business is the message for?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(181, 81, 'What time does the facility close on Fridays?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(182, 82, 'How can a caller speak with Edward Phillips?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(183, 83, '<b>QUESTION 83-85 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: What is being to advertised?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(184, 84, 'What is provided for dessert?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(185, 85, 'What does the speaker say about Chateau Francois?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(186, 86, '<b>QUESTION 86-88 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: What is the announcement about?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(187, 87, 'How can employees find out the location of their new offices?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(188, 88, 'What are staff asked to do on Monday before they leave?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(189, 89, '<b>QUESTION 89-91 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: What is the purpose of this announcement?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(190, 90, 'What is Ms. Williams\' position?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(191, 91, 'What can customers receive at no cost as they leave', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(192, 92, '<b>QUESTION 92-94 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: When will the new system start?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(193, 93, 'What does the speaker say is the benefit to the change?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(194, 94, 'What does the speaker ask staff to do?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(195, 95, '<b>QUESTION 95-97 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: How long will the conference run?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(196, 96, 'What is the main subject of the conference?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(197, 97, 'What must conference participants do following the lectures?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(198, 98, '<b>QUESTION 98-100 REFER TO THE FOLLOWING CONVERSATION</b><br><br>Question: What’s the purpose of this meeting?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(199, 99, 'Where will this new policy be enforced?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN'),
(200, 100, 'What changes have been made to the computer system?', '', 2, 1, '2018-11-01 12:45:07', NULL, 1, 'L-NOICHUYEN');

-- --------------------------------------------------------

--
-- Table structure for table `dethi`
--

CREATE TABLE `dethi` (
  `MaDe` int(11) NOT NULL,
  `TieuDe` varchar(50) NOT NULL,
  `MoTa` varchar(200) NOT NULL,
  `ThoiLuong` int(11) NOT NULL DEFAULT '120',
  `SoCau` int(11) NOT NULL DEFAULT '200',
  `MP3` varchar(255) DEFAULT NULL,
  `NguoiTao` int(11) NOT NULL,
  `NgayTao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `SoLanThi` int(11) NOT NULL DEFAULT '0',
  `TrangThai` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dethi`
--

INSERT INTO `dethi` (`MaDe`, `TieuDe`, `MoTa`, `ThoiLuong`, `SoCau`, `MP3`, `NguoiTao`, `NgayTao`, `SoLanThi`, `TrangThai`) VALUES
(1, 'TOEIC 1', 'Đề thi mẫu TOEIC số 1', 120, 200, 'http://localhost/ToeicThi/TOEIC-upload/MP3/listening1.mp3', 3, '2018-09-23 00:00:00', 0, 1),
(2, 'TOEIC 2', 'Đề thi TOEIC mẫu số 2', 120, 200, 'http://localhost/ToeicThi/TOEIC-upload/MP3/listening2.mp3', 2, '2018-09-23 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaicauhoi`
--

CREATE TABLE `loaicauhoi` (
  `MaLoai` varchar(20) NOT NULL,
  `TenLoai` varchar(45) NOT NULL,
  `MoTa` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaicauhoi`
--

INSERT INTO `loaicauhoi` (`MaLoai`, `TenLoai`, `MoTa`) VALUES
('L-HINHANH', 'Chọn câu trả lời mô tả nội dung trong hình', 'PART 1 - For each question in this part, you will hear four statements about a picture on your test screen. When you hear the statements, you must select the one statement that best describes what you see in the picture. Then click on A, B, C, or D. The statements will not be shown on your test screen and will be spoken only one time.'),
('L-HOIDAP', 'Câu hỏi đáp', 'PART 2 - You will hear a question or statement and three responses spoken in English. They will not be shown on your test screen and will be spoken only one time. Select the best response to the question or statement and click on the answer you want to choose.'),
('L-HOITHOAI', 'Các đoạn hội thoại', 'PART 3 - You will hear some conversations between two people. You will be asked to answer three questions about what the speakers say in each conversation. Select the best response to each question and click on the answer on your test screen. The conversations will not be shown on your test screen and will be spoken only one time.'),
('L-NOICHUYEN', 'Các câu hỏi về bài nói chuyện', 'PART 4 - You will hear some talks given by a single speaker. You will be asked to answer three questions about what the speaker says in each talk. Select the best response to each question and click on the answer on your test screen. The talks will not be shown on your test screen and will be spoken only one time.'),
('R-DIENCAU', 'Chọn từ để điền vào chỗ trống', 'PART 5 - A word or phrase is missing in each of the sentences below. Four answer choices are given below each sentence. Select the best answer to complete the sentence. Then click on (A), (B), (C), or (D) on your test screen.'),
('R-DIENDOANVAN', 'Chọn từ để điền vào đoạn văn', 'PART 6 -  Read the texts that follow. A word or phrase is missing in some of the sentences. Four answer choices are given below each of the sentences. Select the best answer to complete the text. Then click on (A), (B), (C), or (D) on your test screen.'),
('R-HOIDOANVAN', 'Chọn câu đúng trong những câu hỏi đoạn văn', 'PART 7 -  In this part, you will read a selection of texts, such as magazine and newspaper articles, letters, and advertisements. Each text is followed by several questions. Select the best answer for each question and click on (A), (B), (C), or (D) on your test screen.');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `IdUser` int(11) NOT NULL,
  `Ho` varchar(100) DEFAULT NULL,
  `Ten` varchar(45) NOT NULL,
  `GioiTinh` varchar(4) DEFAULT 'None',
  `MatKhau` varchar(50) NOT NULL,
  `Quyen` int(11) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `KichHoat` tinyint(1) NOT NULL DEFAULT '0',
  `Avatar` varchar(255) DEFAULT NULL,
  `NgayThamGia` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`IdUser`, `Ho`, `Ten`, `GioiTinh`, `MatKhau`, `Quyen`, `Mail`, `KichHoat`, `Avatar`, `NgayThamGia`) VALUES
(1, 'Nguyễn Văn Ý', 'Thiên', 'Nam', '123456', 1, 'thiennguyen0897@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(2, 'Nguyễn Vănn', '1', 'Nam', '12345w==', 2, 'giangvien1@gmail.com', 1, '../img/upload/1.png', '2018-09-30 22:59:58'),
(3, 'Nguyễn Văn', '2', 'Nam', '123456', 2, 'giangvien2@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(4, 'Nguyễn Văn', '3', 'Nam', '123456', 2, 'giangvien3@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(5, 'Nguyễn Văn', '4', 'Nam', '123456', 2, 'giangvien4@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(6, 'Nguyễn Văn', '5', 'Nam', '123456', 2, 'giangvien5@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(7, 'Nguyễn Văn', '6', 'Nam', '123456', 2, 'giangvien6@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(8, 'Nguyễn Văn', '7', 'Nam', '123456', 2, 'giangvien7@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(9, 'Nguyễn Văn', '8', 'Nam', '123456', 2, 'giangvien8@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(10, 'Nguyễn Văn', '9', 'Nam', '123456', 2, 'giangvien9@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(11, 'Nguyễn Văn', '10', 'Nam', '123456', 2, 'giangvien10@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(12, 'Nguyễn Thị', '11', 'Nữ', '123456', 3, 'hocvien11@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(13, 'Nguyễn Thị', '12', 'Nữ', '123456', 3, 'hocvien12@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(14, 'Nguyễn Thị', '13', 'Nữ', '123456', 3, 'hocvien13@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(15, 'Nguyễn Thị', '14', 'Nữ', '123456', 3, 'hocvien14@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(16, 'Nguyễn Thị', '15', 'Nữ', '123456', 3, 'hocvien15@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(17, 'Nguyễn Thị', '16', 'Nữ', '123456', 3, 'hocvien16@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(18, 'Nguyễn Thị', '17', 'Nữ', '123456', 3, 'hocvien17@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(19, 'Nguyễn Thị', '18', 'Nữ', '123456', 3, 'hocvien18@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(20, 'Nguyễn Thị', '19', 'Nữ', '123456', 3, 'hocvien19@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(21, 'Nguyễn Thị', '20', 'Nữ', '123456', 3, 'hocvien20@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(22, 'Nguyễn Thị', '21', 'Nữ', '123456', 3, 'hocvien21@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(23, 'Nguyễn Thị', '22', 'Nữ', '123456', 3, 'hocvien22@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(24, 'Nguyễn Thị', '23', 'Nữ', '123456', 3, 'hocvien23@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(25, 'Nguyễn Thị', '24', 'Nữ', '123456', 3, 'hocvien24@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(26, 'Nguyễn Thị 25', '', 'Nữ', '123456', 3, 'hocvien25@gmail.com', 1, NULL, '2018-09-30 22:59:58'),
(27, '', '', 'Nam', '', 3, '', 0, NULL, '2018-10-04 10:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `MaQuyen` int(11) NOT NULL DEFAULT '3',
  `MoTa` varchar(100) NOT NULL DEFAULT 'Người dùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`MaQuyen`, `MoTa`) VALUES
(1, 'Quản trị'),
(2, 'Giáo viên'),
(3, 'Học viên');

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE `thongbao` (
  `MaThongBao` int(11) NOT NULL,
  `NguoiTao` int(11) NOT NULL,
  `TieuDe` varchar(100) NOT NULL,
  `NoiDung` text NOT NULL,
  `Ngay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NguoiNhan` int(11) DEFAULT NULL,
  `NhomNguoiNhan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thongbao`
--

INSERT INTO `thongbao` (`MaThongBao`, `NguoiTao`, `TieuDe`, `NoiDung`, `Ngay`, `NguoiNhan`, `NhomNguoiNhan`) VALUES
(1, 1, 'Quyền lợi bất ngờ!', 'Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi!', '2018-09-23 00:00:00', NULL, 3),
(2, 1, 'Quyền lợi bất ngờ2222!', 'Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi!', '2018-09-23 00:00:00', NULL, 3),
(3, 1, 'Quyền lợi bất ngờ3333!', 'Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi!', '2018-09-23 00:00:00', NULL, 3),
(4, 1, 'Quyền lợi bất ngờ4444!', 'Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi!', '2018-09-23 00:00:00', NULL, 2),
(5, 1, 'Quyền lợi bất ngờ5555!', 'Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi!', '2018-09-23 00:00:00', NULL, 2),
(6, 1, 'Quyền lợi bất ngờ6666!', 'Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi! Không có quyền lợi gì cả ghi thông báo chơi vậy thôi!', '2018-09-23 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTinTuc` int(11) NOT NULL,
  `TieuDe` varchar(100) NOT NULL,
  `NoiDung` text NOT NULL,
  `TomTat` varchar(255) NOT NULL,
  `AnhMinhHoa` varchar(255) NOT NULL,
  `NguoiTao` int(11) NOT NULL,
  `NgayTao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NgayChinhSua` datetime DEFAULT NULL,
  `NgonNgu` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`MaTinTuc`, `TieuDe`, `NoiDung`, `TomTat`, `AnhMinhHoa`, `NguoiTao`, `NgayTao`, `NgayChinhSua`, `NgonNgu`) VALUES
(1, '90 sinh viên nhận 1 tỷ đồng học bổng Acecook Việt Nam', 'Acecook Việt Nam vừa tổ chức thành công lễ trao học bổng tổng giá trị 1 tỷ đồng cho 90 sinh viên có ý chí, nghị lực vươn lên trong cuộc sống của 9 trường đại học\r\nTừ 17/8 tới 31/8, Acecook Việt Nam đã tổ chức lễ trao học bổng cho 90 sinh viên có thành tích học tập tốt và tích cực tham gia các hoạt động xã hội của 9 trường đại học tại Hà Nội, Đà Nẵng, TP.HCM và Cần Thơ (bao gồm ĐH Thương mại Hà Nội, ĐH Kinh tế Quốc dân, ĐH Công nghiệp Hà Nội, ĐH Kinh tế Đà Nẵng, ĐH Ngoại ngữ Đà Nẵng, ĐH Bách khoa Đà Nẵng, ĐH Kinh tế TP.HCM, ĐH Khoa học Tự nhiên TP.HCM, ĐH Cần Thơ). Đây được xem là một trong những chuỗi hoạt động có ý nghĩa với cộng đồng, dành cho sinh viên - thế hệ trẻ của Việt Nam.\r\n\r\nTrong buổi lễ, ông Kajiwara Junichi - Tổng giám đốc Công ty cổ phần Acecook Việt Nam - chia sẻ: “Những chuyển biến tích cực trong đời sống và thành tựu trong học tập các sinh viên đạt được sau khi nhận học bổng những năm trước chính là động lực để Acecook Việt Nam tiếp tục tổ chức cho năm 2018, cũng như tăng số lượng học bổng lên 90 suất cho 4 khu vực”.\r\n\r\nTại buổi lễ đầu tiên ở TP.HCM ngày 17/8, bạn Võ Thị Mỹ Loan (ĐH Cần Thơ) chia sẻ: “Mình thực sự bất ngờ và vui mừng khi biết mình là một trong 90 sinh viên may mắn nhận được học bổng Acecook Việt Nam 2018. Khoản học bổng này sẽ giúp mình tập trung được vào việc học và làm luận văn của sinh viên năm 3”.\r\n\r\nBạn Đặng Thị Nhân (ĐH Ngoại Ngữ Đà Nẵng) cho biết: “Mấy hôm trước ba mẹ mình vừa nói vào năm học rồi mà không biết lấy tiền đâu đóng học phí, vì hè này mình về nhà để phụ giúp ba mẹ nên không đi làm thêm được. Học bổng Acecook Việt Nam 2018 là món quà động viên cả về tinh thần và vật chất cho mình và gia đình. Nhờ học bổng này, mình và gia đình có thể tin tưởng hơn vào con đường đang đi”.\r\n\r\nLà một trong 33 sinh viên xuất sắc nhận học bổng tại khu vực Hà Nội, bạn Lê Thị Hiền (ĐH Công nghiệp Hà Nội) lên kế hoạch: “Mình sẽ dành một phần học bổng sẽ đóng tiền kỳ I của năm học tới để gia đình đỡ phải đi vay mượn. Phần còn lại dùng để cải thiện trình độ tiếng Anh, tháng 12 mình phải đạt 800+ Toeic và sau khi tốt nghiệp thì mình phải đạt được N3 tiếng Nhật”.', 'Acecook Việt Nam vừa tổ chức thành công lễ trao học bổng tổng giá trị 1 tỷ đồng cho 90 sinh viên có ý chí, nghị lực vươn lên trong cuộc sống của 9 trường đại học', 'https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2018_09_10/A1.jpg', 2, '2018-09-23 00:00:00', NULL, 'vi'),
(2, 'Cải cách khảo thí nhìn từ điểm chuẩn đại học năm nay', 'Điểm trúng tuyển của ĐH Y dược TP.HCM là 24,95, so với năm ngoái 29,25. Mức trúng tuyển của ĐH Bách Khoa (ĐH Quốc gia TP.HCM) cũng giảm mạnh, 28 điểm năm ngoái, năm nay còn 23,25 điểm.\r\n\r\nXu hướng này nói lên điều gì và liệu có thực sự đáng lo ngại? Zing.vn giới thiệu bài viết của TS Phạm Thị Ly, chuyên gia giáo dục, về vấn đề này. Bài viết thể hiện quan điểm và văn phong của tác giả.\r\n\r\nĐiểm chuẩn vào đại học phụ thuộc nhiều yếu tố: Yêu cầu của nhà trường về năng lực tối thiểu để có thể tiếp thu chương trình đào tạo, mức độ “hot” của ngành nghề mà trường đào tạo và đặc biệt trực tiếp là cán cân cung cầu (số thí sinh muốn vào trường, và khả năng tiếp nhận của trường).\r\n\r\nỞ Mỹ, mức độ cạnh tranh khi vào trường (tỷ lệ thí sinh được nhận trên tổng số ứng viên), cũng như mức điểm trung bình để xét tuyển là hai yếu tố được xem có ý nghĩa quan trọng biểu hiện uy tín của trường. Vì thế, nó là một trong những thước đo của xếp hạng đại học. Tuy nhiên, trong bối cảnh Việt Nam, những yếu tố đó chỉ có ý nghĩa tương đối.\r\n\r\nTạm gác sang một bên vấn đề tiêu cực trong thi cử, chúng ta hãy giả thiết mức độ tiêu cực bằng không, thì điểm số có tương quan như thế nào với năng lực nói chung, và năng lực học đại học và thành công trong cuộc sống nói riêng?\r\n\r\nKhông có gì đảm bảo một thí sinh đỗ đại học với 25 điểm sẽ học kém hơn bạn cùng khóa có điểm đầu vào 26, 27 hay 28, vì kết quả học tập trong quá trình đào tạo còn phụ thuộc nhiều yếu tố khác. Ngay cả trong trường hợp “những yếu tố khác” đó như nhau, cũng vẫn không có gì đảm bảo hai thí sinh này sẽ có kết quả học tập và mức độ thành công trong cuộc sống tỷ lệ thuận với điểm thi mình đạt được.\r\n\r\nTất nhiên cần có nghiên cứu để khẳng định điểm thi có tương quan như thế nào với kết quả học tập và mức độ thành công về sau, nhưng về mặt lý thuyết, mối tương quan này trước hết phụ thuộc thiết kế đề thi. Tức là, bài thi nhằm đo lường điều gì và đề thi phục vụ cho mục tiêu đó ở mức độ nào?\r\n\r\n', 'Nếu giả thiết tiêu cực trong thi cử bằng không, điểm thi cũng không phải thước đo năng lực hoàn toàn đáng tin cậy với cách ra đề và tổ chức thi hiện nay.', 'https://znews-photo-td.zadn.vn/w1024/Uploaded/pirr/2018_08_12/thi_dai_hoc_2018.JPG', 6, '2018-09-23 00:00:00', NULL, 'vi'),
(3, 'Lý do ngành du lịch được nhiều sĩ tử lựa chọn', 'Nghị quyết số 08-NQ/TW ngày 16/1/2017 của Bộ Chính trị nêu rõ mục tiêu đến năm 2020, ngành du lịch cơ bản trở thành ngành kinh tế mũi nhọn, đồng thời đặt mục tiêu đến năm 2020 thu hút 17-20 triệu lượt khách du lịch quốc tế, 82 triệu lượt khách du lịch nội địa; đóng góp trên 10% GDP; tạo ra 4 triệu việc làm, trong đó có 1,6 triệu việc làm trực tiếp.\r\n\r\nTừ cơ sở này có thể thấy rằng sinh viên tốt nghiệp ngành du lịch sẽ có cơ hội tìm việc lớn.\r\n\r\nNhu cầu nhân lực cao\r\nKhi du lịch trở thành ngành kinh tế mũi nhọn, nhu cầu nguồn nhân lực cũng vì thế tăng cao. Theo báo cáo tóm tắt kết quả 5 năm thực hiện Chiến lược phát triển du lịch Việt Nam đến năm 2020 của Viện nghiên cứu phát triển du lịch (ITDR), cả nước hiện có trên 1,3 triệu lao động du lịch, chiếm khoảng 2,5% tổng lao động cả nước.\r\n\r\nTuy nhiên chỉ 42% được đào tạo về du lịch, 38% được đào tạo từ các ngành khác chuyển sang và khoảng 20% chưa qua đào tạo chính quy mà chỉ được huấn luyện tại chỗ. Đến năm 2020 ngành du lịch cả nước sẽ cần đến trên 2 triệu lao động chất lượng cao.\r\n\r\nTốc độ tăng trưởng du lịch như hiện nay yêu cầu mỗi năm phải đào tạo thêm 25.000 lao động mới. Tuy nhiên, mỗi năm các trường đào tạo chuyên ngành về du lịch chỉ đáp ứng được khoảng 60% nhu cầu của ngành, dẫn đến tình trạng thiếu nguồn nhân lực.', 'Du lịch Việt Nam đang trên đà phát triển mạnh mẽ với lượng khách nội địa và quốc tế ngày một tăng. Nhu cầu nhân lực ngành này cũng vì thế tăng cao, hấp dẫn nhiều sĩ tử theo học.', 'https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2018_04_10/187_Anh_2_TS_Tran_Du_Lich_gui_zing.jpg', 7, '2018-09-23 00:00:00', NULL, 'vi'),
(4, 'Giám đốc 8X: \'Lương nghìn đô không có nghĩa là ngừng cố gắng\'', 'ăng Gia Hải Lam được bổ nhiệm trở thành giám đốc điều hành Buzzmetrics - một trong những công ty chuyên về nghiên cứu thị trường thông qua mạng xã hội - từ khi còn rất trẻ.\r\n\r\nTrước đó, anh bắt đầu công việc marketing ở các công ty quảng cáo hàng đầu. Ngoài ra, anh còn tham gia giảng dạy ở Học viện AIM và các hoạt động hướng nghiệp sinh viên Đại học RMIT và Đại học Kinh Tế TP.HCM.\r\n\r\nHải Lam được các chuyên gia tuyển dụng của Primus đánh giá nằm trong top 1 các ứng viên cho các vị trí quản lý cấp cao hiện nay.\r\n\r\nTrò chuyện với Lam, chàng giám đốc của Buzzmetrics cho biết chỉ muốn nói về thất bại và những bài học mình đã có được trong nhiều năm sự nghiệp.\r\n\r\nAnh chia sẻ: \"Top 1 là người ta tin mình thì nói về mình vậy thôi, cũng không có mức tối đa nào cho sự phát triển để trở thành top 1 cả\".\r\n\r\nThất bại nhiều hơn thành công\r\n- Anh có nghĩ nhiều về tương lai của mình trong những năm đại học?\r\n\r\n- Sự thật là ngày đó mình cúp học nhiều lắm. Ngây thơ, ngờ nghệch và chưa hiểu chuyện mà.\r\n\r\nTừng ấy năm đi học là từng ấy năm làm phục vụ bàn. Nghĩ mình tang bồng chí trai, không cần xin tiền gia đình, tự làm tự sống. Rồi đi làm riết bị ghiền, thậm chí còn định nghỉ học để đi làm vì thấy nhiều tiền quá trời, đi học không ra tiền mà còn cực nữa.\r\n\r\nChính vì thế, ngày đó không có định hướng cuộc đời gì hết. Đến tận năm 4 vẫn không biết mình học Marketing ra trường sẽ làm gì. Ngành này công việc gồm những gì, mức lương ra sao, con đường thăng tiến sẽ thế nào.\r\n\r\nNói chung là hoàn toàn không có khái niệm gì. Cũng may cuộc đời đối đãi với mình tốt quá.\r\n\r\n- Bây giờ khi đang đứng ở vị trí cao, vậy nhìn lại thời đó của mình, anh có tiếc không?\r\n\r\n- Tiếc thì không, nhưng thấy may mắn. May là vì không có định hướng trước nhưng cuộc đời kéo mình theo hướng có thể phát triển được. Có nhiều người bạn xung quanh giỏi vẫn loay hoay vô định, không biết đi theo hướng nào, phát triển ra sao, thế nên cái việc không có tầm nhìn trước nguy hiểm lắm.\r\n\r\nDo đó, từ khi tốt nghiệp, đi làm, có hoạt động hướng nghiệp nào của sinh viên mình cũng tham gia. Có lẽ muốn nhân cơ hội ấy để giúp các bạn trẻ không lặp lại sai lầm của mình ngày xưa.\r\n\r\n- Anh bắt đầu sự nghiệp của mình như thế nào?\r\n\r\n- Nói ra thì không ai tin, nhưng tất cả là hên. Việc làm đầu tiên ngoài phục vụ nhà hàng là nhập liệu từ những danh sách rất dài viết tay vào hệ thống của một công ty. Làm một tháng, tự nhận thấy đây là vị trí không tương lai, khó phát triển.\r\n\r\nĐúng lúc ấy thì có người chị đang làm tại một tập đoàn quảng cáo lớn giới thiệu công việc khác. Từ đó, mình mới biết cái gì là quảng cáo, như thế nào là agency. Đó là cả thế giới mới, rộng lớn và nhiều thứ cần khám phá.\r\n\r\nTiếng Anh của mọi người ở đó quá xuất sắc, kiến thức chuyên môn cũng rất giỏi. Nhờ vậy, mình mới biết lúc này mà không bắt đầu chạy thì sẽ bị bỏ lại rất xa.\r\n\r\nThế là bắt đầu từ ấy, người ta làm 8 tiếng thì mình phải làm 10 tiếng, là người đến sớm nhất, về trễ nhất. Hoàn thành việc của mình thì xin thêm phần của người khác để làm. Mình phải chạy nhanh để bằng được với người ta.\r\n\r\n- Có những cái cố gắng được, nhưng có những thứ phải học, anh phải học thêm những gì?\r\n\r\n- Thú thật là tới giờ mình vẫn chưa có bằng A tiếng Anh. TOEFL, TOEIC, IELTS là cái gì cũng chưa từng đụng vào. Ngoại ngữ mình có khi bước ra khỏi trường cấp 3 là một vốn từ vựng hạn chế, cơ sở ngữ pháp rất cơ bản.\r\n\r\nNhưng cơ hội học lại có ở khắp nơi. Thời điểm đầu đi làm phục vụ bàn, khách nước ngoài rất nhiều. Ngày đó mình cứ \"Hello, how are you. You eat what?\", nghĩa là ráp từng chữ lại. May mắn là khách Tây rất nhiệt tình nói chuyện với dân địa phương, dù mình dốt tiếng Anh.\r\n\r\nThế là mình cứ hỏi đọc từ này thế nào, câu kia ra sao. Từ từ như thế 4 năm, cái học được tốt nhất là phản xạ nghe - nói ngoại ngữ. Đó chính là kiểu trường lớp mà không cần có tiền, không cần thầy cô đứng bên cạnh kèm cặp. Cuộc đời là cuốn sách mở và chuyện của mình là phải đọc cho đúng.\r\n\r\nMarketing cũng vậy. Nơi làm đầu tiên là một tập đoàn lớn. Mọi người chuyên nghiệp lắm. Có khi nói một câu 10 chữ thì 8 là tiếng Anh, mà còn là tiếng Anh chuyên ngành. Lúc đó làm gì có đường lùi. Mình nghỉ việc thì đói ăn ngay lập tức vì làm gì có ai hỗ trợ phía sau.\r\n\r\nThế là không dám giấu cái ngu của mình. Gặp ai cũng hỏi cái này cái nọ, quy trình làm ra sao, phải làm thế nào. Lúc đó, đi làm không phải để lấy lương hay viết báo cáo thực tập, mà là để học. Công ty cũng là cuốn sách mở. Lại chịu khó miệt mài đọc thôi!', 'Được đánh giá là ứng viên top 1 cho vị trí quản lý cấp cao, nhưng Hải Lam - giám đốc điều hành Buzzmetrics - cho rằng anh luôn cố gắng vượt qua giới hạn của bản thân.', 'https://znews-photo-td.zadn.vn/w1024/Uploaded/oqivovbv/2017_12_28/Hai_Lam1_ZING.jpg', 12, '2018-09-23 00:00:00', NULL, 'vi'),
(5, 'Cô gái \'biết 7 ngoại ngữ\' Khánh Vy chia sẻ mẹo nói tiếng Anh lưu loát', 'Trần Khánh Vy khiến nhiều người khâm phục bởi thành tích học tập đáng nể (IELTS 7.5, giải 3 học sinh giỏi tiếng Anh toàn quốc) và khả năng “bắn” tiếng Anh như gió.\r\n\r\nGần đây, cô sinh viên chuyên ngành chính trị quốc tế của Học viện Ngoại giao càng quen mặt với khán giả hơn khi trở thành người dẫn chương trình bản tin quốc tế của VTC, MC của hai chương trình về tiếng Anh là Crack’em up và Preshow của 8 IELTS trên VTV7. Khánh Vy đã tiết lộ một vài bí quyết học để sử dụng tiếng Anh lưu loát.\r\n\r\nHọc tiếng Anh qua các chương trình giải trí\r\nKhánh Vy cho biết, cô rất bắt đầu học tiếng Anh từ lúc 5, 6 tuổi. Lúc đó, cô nàng rất thích xem các chương trình giải trí bằng tiếng Anh và tự bắt chước theo các video clip trên mạng. Tình yêu với tiếng Anh cũng dần lớn lên theo Khánh Vy từ đó.\r\n\r\nLuôn thực hành bằng tiếng Anh\r\nTheo Khánh Vy, cái gì cũng phải đi từ vỡ lòng rồi nâng dần trình độ. Không học tốt căn bản thì khó có thể giỏi vững chắc. Ngoài ra, muốn phát âm giỏi càng phải kiên trì đọc từ nào ra từ ấy ngay từ đầu.\r\n\r\nKhánh Vy ủng hộ việc học ngữ pháp trước, giao tiếp sau. Chính vì thế, cô nàng luôn trau dồi việc học ngữ pháp của mình. Khánh Vy cũng có một bí quyết rất thú vị là luyện speaking bằng cách độc thoại. Theo cô, đây là cách luyện phát âm hay hơn, rèn được ngữ điệu tự nhiên mà lại khiến bản thân cảm thấy vui vẻ.\r\n\r\nĐặc biệt, “hot girl 7 thứ tiếng” khẳng định chắc nịch rằng một năm hoàn toàn đủ để bứt phá môn tiếng Anh.\r\n\r\nHọc tại trung tâm tiếng Anh chất lượng\r\nHot girl cho biết, muốn thực hành tốt tiếng Anh thì cần có môi trường và những giáo viên dạy giỏi. Mặc dù gây sốt cộng đồng mạng về clip “bắn” ngoại ngữ của mình, nhưng Vy cũng nhận được những góp ý về cách dùng từ, phát âm và ngữ điệu.\r\n\r\nVì vậy, Khánh Vy đã tìm đến Học viện đào tạo tiếng Anh AG FiveStar English - đối tác tổ chức thi và luyện thi IELTS tiêu chuẩn 5 sao do Hội đồng Anh lựa chọn - để tiếp tục trau dồi tiếng Anh.\r\n\r\nKhánh Vy cho biết, Học viện Anh ngữ 5 sao quốc tế AG FiveStar English không chỉ đào tạo tiếng Anh chuẩn quốc tế, luyện thi các chứng chỉ IELTS, TOEIC mà còn đào tạo các kỹ năng mềm bằng tiếng Anh để học sinh có khả năng hội nhập cuộc sống tại nước ngoài, làm việc trong kỷ nguyên IoT hội nhập toàn cầu.\r\n\r\nMặc dù đã đạt IELTS 7.5, Khánh Vy vẫn quyết tâm hoàn thành khoá học IELTS tại AG FiveStar English để có thể đạt được thành tích cao hơn. Cô chia sẻ: “Mình vô cùng ngưỡng mộ những người thầy giáo tại Học viện Anh ngữ 5 sao quốc tế AG FiveStar English, từ tình yêu tiếng Anh đến vốn kiến thức khủng về IELTS. Mình tin với sự chỉ dạy của các thầy cô và vốn kiến thức sẵn có, mình sẽ chạm đến mốc IELTS 8.5 mơ ước”.', 'Nổi tiếng với clip nói 7 thứ tiếng, sở hữu bảng thành tích ấn tượng với loạt giải thưởng tiếng Anh, Trần Khánh Vy có lẽ là cái tên đã khá quen thuộc với giới trẻ hiện nay.', 'https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2017_09_05/image001_6.jpg', 4, '2018-09-23 00:00:00', NULL, 'vi'),
(6, '\'Ma trận\' video học tiếng Anh trên mạng', 'Tại thời điểm này, không khó để tìm kiếm video dạy tiếng Anh trên YouTube nói riêng cũng như trên mạng nói chung. Đặc biệt, trong số đó, rất nhiều video do các giáo viên người Việt làm.\r\n\r\nMa trận video tiếng Anh online\r\nKhi truy cập vào YouTube với từ khoá tìm kiếm “tiếng Anh”, người dùng có thể tìm thấy hàng nghìn lượt kết quả. Trong đó, đa phần là bài giảng của giáo viên người Việt với thời lượng dưới 5 phút.\r\n\r\nVideo hướng dẫn kỹ năng đọc hay ngữ pháp cũng xuất hiện trên YouTube nhưng không được nhiều người quan tâm. Trong khi đó, kỹ năng phát âm được khá nhiều người tìm kiếm và học trực tuyến. Thực tế, đây cũng là điểm yếu nhất của người Việt khi học tiếng Anh.\r\n\r\nTrong đó, nổi bật nhất phải kể đến những cái tên như Ms.Hoa Toeic, Elight và Dan Heuer. Những video của các kênh này thường có lượt truy cập lớn, khoảng vài trăm nghìn lượt xem cho mỗi video.\r\n\r\nThông thường, các kênh làm video hướng đến mục đích thương mại. Các sản phẩm này nằm trong chiến dịch marketing để thu hút học viên và quảng bá thương hiệu.\r\n\r\nTuy nhiên, việc có quá nhiều các kênh học tiếng Anh cũng khiến người học bị lạc giữa ma trận. Không biết lựa chọn kênh nào, hệ thống nào để học.\r\n\r\nHoàng Sơn, sinh viên Học viện báo chí và tuyên truyền cho biết “thực sự học tiếng Anh trên mạng qua video rất tiện. Tuy nhiên, có quá nhiều kênh với nhiều kiến thức đúng sai khác nhau khiến cho những bạn mất gốc bị loạn”.\r\n\r\nChất lượng nhập nhằng, người học hoang mang\r\nThực tế, video dạy tiếng Anh của người Việt đã xuất hiện nhiều trong 2 đến 3 năm gần đây. Tuy nhiên, chỉ đến khi thầy Dan Heuer chỉ ra những lỗi sai lớn trong các sản phẩm này, mọi người mới “tá hoả” xem lại chất lượng của những video này.\r\n\r\nThầy Dan Heuer chỉ ra một số lỗi cơ bản về việc phát âm trên những video của một số kênh video dạy tiếng Anh tại Việt Nam. Theo đó, các sản phẩm từ các trung tâm tiếng Anh này mắc những lỗi như sai trọng âm, nhầm hoặc thiếu âm cuối.\r\n\r\nTrong tiếng Anh âm cuối, trọng âm rất quan trọng. Nó giúp người đối diện biết và phân biệt chính xác từ mà chúng ta muốn nói.\r\n\r\nTrên thực tế, đây là những lỗi sai thường gặp của người Việt Nam. Tuy nhiên, đối với những thầy cô giáo dạy ngoại ngữ thì lỗi này rất cơ bản và ảnh hưởng nghiêm trọng đến những học viên đang theo học.\r\n\r\nHuyền Trang, sinh viên đại học Lao động và xã hội cho biết “mình đang học theo những video trên YouTube của một kênh lớn. Mình cảm thấy hoang mang khi thầy Dan chỉ ra nhiều lỗi sai cơ bản của kênh như vậy. Không biết là những kiến thức mình thu nạp được có đúng không”.\r\n\r\nCô Lưu Thuỳ Hương, nghiên cứu sinh chuyên ngành giáo dục tại Anh, giảng viên đại học Ngoại thương cho biết “Để một người tự tin nói tiếng Anh đã là điều tốt và đáng quý. Tuy nhiên, với tư cách là người dạy, những lỗi sai trên không nên có”.\r\n\r\nNgoài ra, cô cũng nói thêm rằng trên những video dạy tiếng Anh online, không có một quy chuẩn nào được đặt ra. Nhiều khi vì chưa có chuyên môn sâu nên chính người tạo ra video cũng không biết mình sai.\r\n\r\nChị Lê Diệu Hương, trung tâm tiếng Anh MsD, đồng quan điểm: “hầu hết trung tâm đều hướng tới việc làm video học online để tiếp cận học viên. Tuy nhiên, chất lượng của các video chưa cao và còn có nhiều lỗi. Nếu để học phát âm sai, sẽ rất khó để sửa”.\r\n\r\nGiải pháp nào?\r\nViệc video dạy tiếng Anh trực tuyến do các trung tâm tiếng Anh sản xuất không đạt chất lượng khiến nhiều người học hoang mang, không biết nên chọn nguồn học liệu nào. Tuy nhiên, trên YouTube nói riêng và Internet nói chung vẫn còn nhiều địa chỉ có thể tin tưởng được.\r\n\r\nNgười học nên lựa chọn những kênh dạy tiếng Anh online nổi tiếng trên thế giới, do người bản ngữ trực tiếp hướng dẫn. Nếu điều kiện cho phép, nên đăng ký các khoá học với người nước ngoài hoặc tìm một số giáo viên có trình độ tốt.\r\n', 'Học qua các nguồn thông tin trên mạng đang dần trở thành xu hướng. Tuy nhiên, chất lượng của các video dạy tiếng Anh online hiện chưa được kiểm soát.', 'https://znews-photo-td.zadn.vn/w660/Uploaded/OFH_oazszstq/2017_08_23/21039664_1827137547301406_1380718246_n.jpg', 8, '2018-09-23 00:00:00', NULL, 'vi'),
(7, 'Học tiếng Anh: Từ vựng có còn là quan trọng nhất?', 'Trước tiên, cần hiểu nhận định trên theo hai khía cạnh. Một là tầm quan trọng của từ vựng với việc học tiếng Anh. Hai là lý do học từ vựng không hiệu quả.\r\n\r\nTầm quan trọng của từ vựng\r\nNhà ngôn ngữ học nổi tiếng David A. Wilkins (1972) từng nói: “Không có ngữ pháp, rất ít thông tin có thể được truyền đạt. Nhưng không có từ vựng thì chẳng một thông tin nào có thể được truyền đạt cả”.\r\n\r\nNhận định trên cho thấy, từ vựng luôn là yếu tố quan trọng hàng đầu khi học một ngôn ngữ. Tuy nhiên, cách học của mỗi người sẽ quyết định kết quả mang lại. Nếu chỉ mãi cắm cúi vào việc ghi chép một cách rập khuôn, hay học từ theo kiểu nhớ mặt chữ, kết quả nhận lại là bạn có thể đọc hiểu nhưng sẽ không thể nghe hay nói được.\r\n\r\nNhưng nếu học từ vựng đúng cách, bạn hoàn toàn có thể sử dụng chúng một cách nhuần nhuyễn vào bất cứ ngữ cảnh nào.\r\n\r\nCách học từ vựng đúng\r\nTheo nghiên cứu của các chuyên gia lập trình ngôn ngữ tư duy, con người học hỏi và tiếp nhận thông tin qua năm giác quan. Trong đó, ba cách tiếp nhận thông tin chính là: hình ảnh, âm thanh và vận động.\r\n\r\nNgười có khuynh hướng sử dụng thị giác sẽ học từ vựng tốt nhất qua hình ảnh. Người có khuynh hướng sử dụng thính giác sẽ học tốt từ vựng qua âm thanh. Còn người có khuynh hướng sử dụng xúc giác thì sẽ học từ vựng thông qua các trò chơi vận động, kích thích trí não. Tuy nhiên, phương pháp học từ vựng tốt nhất là kết hợp cả 3 yếu tố này.\r\n\r\nHọc theo cách của người thông minh\r\nCó một ứng dụng hữu ích giúp bạn “quên từ vựng còn khó hơn việc nhớ chúng”. Đó chính là VOCA - hệ thống học từ vựng tiếng Anh thông minh với phương pháp học thú vị, không gây nhàm chán.\r\n\r\nVOCA áp dụng phương pháp flashcard nổi tiếng, kết hợp cùng hệ thống hình ảnh, âm thanh, vận động kích thích tư duy não bộ và sự ghi nhớ. Như việc học phát âm, VOCA sẽ giúp bạn kiểm tra phát âm và đưa ra góp ý để cải thiện kỹ năng phát âm theo chuẩn người bản ngữ.\r\n\r\nSau mỗi bài học, VOCA sẽ đưa ra kết quả cho bạn và so sánh với những người khác, từ đó thúc đẩy người học nỗ lực hơn nữa như trong một cuộc thi, vô tình khiến từ vựng “hằn sâu” trong tâm trí người học.\r\n\r\nPhương pháp của Tony Buzan\r\nHệ thống sẽ tự động nhắc nhở người học kiểm tra sau khi học một bài, kiểm tra trước khi vào bài mới, kiểm tra sau 7 bài, cuối cùng là kiểm tra sau 30 bài. Đây là nguyên tắc tối ưu để giúp người học ghi nhớ từ vựng sâu hơn và không rơi vào trạng thái \"học trước quên sau\".', 'Gần đây, một số diễn đàn xuất hiện ý kiến học từ vựng không quan trọng. Cụ thể, nhiều người học tiếng Anh lâu năm, lượng từ vựng nhiều nhưng vẫn không thành thạo giao tiếp được.', 'https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2017_08_14/voca8.jpg', 11, '2018-09-23 00:00:00', NULL, 'vi'),
(8, 'When dinosaurs roamed Antarctica', 'There was once a time when the great southern landmass was covered in forests and dinosaurs roamed free. How could such an icy wilderness once have been so warm that it could support Earth’s most gigantic creatures?\r\n\r\nTo understand this we have to go back in geological time. Antarctica was ice free during the Cretaceous Period, lasting from 145 to 66 million years ago. That long ago may seem unfamiliar but we know it because it was the last age of the dinosaurs before an asteroid hit the earth and ended their time on this planet.\r\n\r\nDuring this time period there were forests at both poles. Fossils of trees and cold-blooded reptiles have allowed scientists to build up a picture of what the climate was like. Cold-blooded reptiles need the warmth of the sun to survive; today we see them basking in the sun to warm up during the day. At the poles where the sun disappears during the winter months it must have been warm enough for them to survive through the darkness.\r\n\r\nAntarctica was ice free during the Cretaceous Period. During this time there were forests at both poles. \r\nAntarctica was ice free during the Cretaceous Period. During this time there were forests at both poles.\r\nScientists also use the shells of fossil organisms that lived in the ocean called foraminifera to understand past climate. By analysing the chemistry of their shells and knowing the age intervals when different species lived they can get an estimate of ocean water temperature during that time.\r\n\r\nDr Brian Huber from the Smithsonian Museum of Natural History investigates the Cretaceous with a particular focus on deep-sea sites around Antarctica. He explains; “foraminifera provide some of the best records because you\'ve got both bottom dwelling ones living in the sediments and recording bottom ocean temperatures and then you\'ve got the planktonic ones that live in the top fifty meters of the ocean recording atmospheric temperatures. When you couple those records through time and analyse the shells from different parts of the ocean all over the world, you get a really good idea of the evolution of climate.”\r\n\r\nHuber elaborates that what they found in the Southern Ocean around Antarctica was hard to believe at first because it just seemed too warm; “we found temperatures of 30C at 58 degrees south,” close to the Antarctic Circle.\r\n\r\nThese high temperatures occurred during the middle of the Cretaceous known as the ‘Cretaceous Hothouse’ - a hot greenhouse effect caused by increased carbon dioxide in the atmosphere. But what happened in the Cretaceous to create a world where there were trees and dinosaurs roaming Antarctica unlike the barren ice fields of today?\r\n\r\nHuber explains; “what we know about the mid-Cretaceous in particular is that we had much faster rates of sea floor spreading and so more volcanic sources of CO2.” Huber and colleagues are still investigating whether the ‘hothouse’ occurred as a result of a major amount of volcanism erupting CO2 and creating a greenhouse blanket that warmed the earth.\r\n\r\nWe all know the climate changes, it has in the past, it is changing now and it will in the future, but what is different about what we are doing now compared to what happened in the Cretaceous? Could Antarctica be ice-free again soon?\r\n\r\nGiven the rate at which ice flows, we won\'t see [the whole of] Antarctica deglaciate in a matter of decades.\r\nGiven the rate at which ice flows, we won\'t see [the whole of] Antarctica deglaciate in a matter of decades.\r\n“It\'s really an unprecedented rate and magnitude of change compared to geologic events that we know of from the past. We\'re releasing hundreds of billions of tons of CO2 into the atmosphere in just a matter of decades. Volcanoes can\'t produce that amount of CO2 in such a short time span even if they are huge volcanoes;” says Huber.\r\n\r\nIn terms of the future, Huber suggests; “I think what we\'ll see possibly in decades, maybe centuries is what are called ice streams that start flowing faster and it could be that West Antarctica in particular starts to deglaciate. Given the rate at which ice flows, we won\'t see [the whole of] Antarctica deglaciate in a matter of decades. Glaciologists predict that once you start raising sea level you start getting a positive feedback where that allows ice to flow faster and sea level rises faster, so then it just sort of keeps going. So yes I think the signs are there already.”\r\n\r\nWe may not have dinosaurs roaming Antarctica again, but we can’t rule out it being ice free in the future, and we have no way of knowing what that would be like for humans as we have never lived on Earth when there wasn’t ice at the poles.', 'Antarctica - icy, empty, desolate, cold - these are words you may use to describe it, but it hasn’t always been that way.', 'http://asset-manager.bbcchannels.com/i/2fesn0k80001000', 19, '0000-00-00 00:00:00', NULL, 'en'),
(9, 'Discovering the secrets of manatee chat', 'Not so long ago, Florida manatees (Trichechus manatus latirostris) were thought to be mostly silent, solitary herbivores with a simple communication system consisting mainly of contact calls between a mother and her calf.\r\n\r\nHowever, research in recent years has suggested manatees might not be so solitary after all and may have a complex vocal repertoire that goes beyond simple parent/child communication.\r\n\r\nManatees “Lil Joe” and “CC” at Zoo Tampa at Lowry Park, Florida. Citizen science is helping to decode the high-pitched chirps of these mysterious marine mammals. © Natalija Lace\r\nManatees “Lil Joe” and “CC” at Zoo Tampa at Lowry Park, Florida. Citizen science is helping to decode the high-pitched chirps of these mysterious marine mammals. © Natalija Lace\r\nWhen compared to other fully aquatic marine mammals like dolphins or whales, manatees’ vocal repertoire is limited, but we’re yet to fully understand the extent of their language, the degree of individual variations and, most importantly, the functions of their various calls.\r\n\r\nTwo manatee calls. We will be trying to determine if these are an exchange between two manatees or just one manatee calling out.\r\nTo address these gaps in our knowledge, Cetalingua Project (my research group which decodes marine mammal communication) has launched a citizen science study called “Manatee Chat” on the Zooniverse website. First, we are asking people to help us identify manatees’ calls and eating noises by listening to sound files and visually examining a spectrogram (a visual representation of the sound and its frequency changes over time). In the second phase, we will classify these sounds and decode the individual calls of specific animals.\r\n\r\nJuvenile male Teco 2 was part of the data collection. Unfortunately in 2013 he was found dead due to acute watercraft trauma with seagrass still in his mouth. Watercraft-related mortalities are a serious threat and caused 107 manatee deaths in 2017 © Natalija Lace\r\nJuvenile male Teco 2 was part of the data collection. Unfortunately in 2013 he was found dead due to acute watercraft trauma with seagrass still in his mouth. Watercraft-related mortalities are a serious threat and caused 107 manatee deaths in 2017 © Natalija Lace\r\nManatee Chat uses a very large dataset which I collected over several years at the Manatee Rehabilitation Center, Tampa Zoo at Lowry Park, Florida. The first thing many citizen scientists notice is how unexpectedly bird-like manatee calls are. Manatees are big: they can grow to over 4m (13ft) in length and weigh around 1400kg (220 stone) so it is surprising to hear their high-pitched chirps and squeaks. It is a mystery why they produce these sounds as lower frequencies would travel farther and allow them to keep in touch even over long distances.\r\n\r\nLaunched in March 2018, over 1200 citizen scientists have taken part in the project so far. They have already found a number of interesting and unexpected calls and even some mystery sounds that have not been identified yet.\r\n\r\nAn intense acoustic exchange between several manatees. What information, if any, is being communicated here?\r\nUltimately, the classifications made by volunteers will be used to produce better models to identify and classify all calls automatically. Such a system would have many conservational benefits and help to decode the functions of manatee calls.\r\n\r\nManatees may not be the solitary animals capable of only basic communication that we once thought. © Natalija Lace\r\nManatees may not be the solitary animals capable of only basic communication that we once thought. © Natalija Lace\r\nThis technology could help solve some of the mysteries that surround this enigmatic species such as how do they navigate? Can they remember and recognise fellow manatees they met years ago? What information do their calls convey? Do they have alarm calls? Why are they being hit by boats despite their excellent hearing?\r\n\r\nWe invite current and future citizen scientists to take a part in this project, not only because it contributes to scientific knowledge, but because it is interesting and fun. No two soundfiles are the same, and many of our current citizen scientists get excited when they find a clear call or an intense call exchange among several manatees. In the future, we plan to add video clips so citizen scientists can analyse behavioral states that correspond to the sound files and see elusive manatees up close.\r\n\r\nA 2017 census found that only 6,620 manatees are left in Florida’s waters and even though the population has been recovering in recent years, manatees still face many challenges including boat strikes, cold stress (manatees cannot adapt to water temperatures below 20C and will experience metabolic slow-down, compromised immunity, and eventual death as they stop eating and lose weight), toxic algae blooms, and habitat destruction. By learning more about these mysterious aquatic herbivores, we can better understand their ecology, biology, cognition, and communication.', 'Did you know manatees chat to each other? And that they chirp like birds?', 'http://asset-manager.bbcchannels.com/i/2fe950k80001000', 26, '0000-00-00 00:00:00', NULL, 'en'),
(10, 'The snake people of southern India', 'I didn’t know that the cobra could be so awe-inspiring.\r\n\r\nA few years ago, when I travelled through the dry, thorny scrublands of South India, someone had pointed at the raised hood of this snake by the roadside. At the time, though, I was inside an air-conditioned car on a perfectly paved highway that stretched like a gash on the countryside. The speed of the car and my urban eyesight had shielded me from its power.\r\n\r\nNow, I was standing less than 3m away from a cobra, with only a short brick wall separating us. I couldn’t take my eyes off the hissing, striking, fully grown king of snakes.\r\n\r\n“We are trimming trees outside,” said Rajendran, calmly handling the cobra, one of India’s most venomous snakes, wearing only a loose cotton shirt and a faded lungi (sarong). He guided the cobra towards a clay pot using a long metal rod with a smooth hook at the end. “The vibrations of that work are making the snake nervous.”\r\n\r\nI was in Vadanemmeli, a small coastal village on the outskirts of Chennai, to meet Rajendran. On that blindingly hot day, the sun was turning the waters of the Bay of Bengal into sparkling bands of silver as he spoke about his work with snakes.\r\n\r\nRajendran belongs to the Irula tribe, one of India’s oldest indigenous communities, who live along the north-eastern coast of the state of Tamil Nadu. They are known for their ancient and intimate knowledge of snakes, and their skills form an important but nearly invisible part of the healthcare system in India.\r\n\r\nMany people are scared of snakes, but we must remember that the snake is only interested in survival\r\n\r\n“Many people are scared of snakes,” Rajendran said, standing next to a large sign of the non-venomous snakes of the region. “But we must remember that the snake is only interested in survival. If we move in agitation, the snake perceives a threat and can strike. If we stand still, however, it will often slither away.”\r\n\r\nWe were at the offices of the Irula Snake Catchers Industrial Co-Operative Society, which was formed in 1978 in Vadanemmeli to capture snakes and extract their venom. Nearly 50,000 people die of snakebites each year in the country, and the only reliable treatment is the prompt administration of antivenom. Six companies across India produce around 1.5 million vials of antivenom annually, and most of it is derived from the venom extracted by the Irulas.\r\n\r\nRajendran jumped into a sunken sandpit enclosed by a low brick wall, telling me to remain outside. A high thatched roof protected the space from the sun, and a small raised platform in the centre of the pit had a simple blackboard with details of the snakes being held in the facility. This was the venom extraction site.\r\n\r\nRajendran retrieved a kannadi viriyan (Russell’s viper) from a pot in a corner of the sandpit and placed it on the platform. The beautiful circular patterns on its skin often inspire fear because it is one of the most aggressive venomous snakes in the region.\r\n\r\n“We aren’t holding too many snakes right now,” he said, pointing to the numerous rows of empty clay pots, neatly arranged outside the thatch structure. Each pot will be half-filled with sand before housing two snakes each, and the mouth of the pot will be carefully sealed with porous cotton cloth so that the snakes can’t leave the pot but there is still enough air. It is a necessary precaution, especially when the number of venomous snakes is so large, both for the safety of the snakes and for human beings in the area.\r\n\r\nThe co-operative has official licenses to hold about 800 snakes at a time. “We keep every snake for 21 days, and extract venom four times during that period,” Rajendran said. The snakes are then released into the wild. A small mark on their belly scales prevents the same snake from being caught repeatedly. “The mark goes away after a few moultings.”\r\n\r\nRajendran’s confidence in handling snakes and his deep understanding of these creatures are derived from a childhood spent in the forests and scrublands of the region. Before he turned 10, he had seen hundreds of snakes being captured. The Irulas usually work in silence, even when they go into the forest with others. They instinctively know the significance of faint signs on the ground to either follow clues or dismiss them. However, they often find it hard to articulate the details of their understanding, even to people who study reptiles.\r\n\r\nThe origins of the Irula community and their interaction with snakes are shrouded in mystery, but their mythology blends local animistic traditions with the vocabulary of mainstream religion. Their main deity is a virgin goddess called Kanniamma, who is deeply associated with the cobra. Many rituals involve the priest entering a trance and hissing like a snake, symbolising the spirit of the goddess.\r\n\r\nIronically, for a large part of the 20th Century, tens of thousands of Irulas made a living by hunting snakes for their skin. Out of reverence to their goddess, though, they wouldn’t eat its meat. Local tanners would pay between 10 and 50 rupees for a single skin before processing and exporting it to Europe and the United States for use in the fashion industry. In 1972, however, the Wildlife Protection Act in India banned the hunting of a number of animals, including snakes.\r\n\r\n“After the Wildlife Protection Act came into force, the Irulas were in bad shape,” said Romulus Whitaker, a herpetologist and conservationist who has worked with the Irulas for nearly 50 years. He explained that the small amount of money they made from selling snake skins was still a large part of the monthly income for many Irula families.\r\n\r\n“I would say that they were starving,” Whitaker added.\r\n\r\nThe formation of the co-operative society was an important turning point. Though the collective employed less than 1% of the population (which was estimated to be around 190,000 in a 2011 census), its presence provided legitimacy for their traditional skills. As hunter-gatherers, the Irulas were used to being considered poachers by local government officials. They were also viewed with suspicion by other communities in the region, and their work with snakes added to the prejudice.\r\n\r\nSusila, an Irula woman, spoke about the discrimination they often faced.\r\n\r\n“When we went into the village, we were called derogatory names,” she said. “We were not treated well and were often cheated when we borrowed money.”\r\n\r\nMany Irulas were illiterate and ended up as bonded labourers, de-husking rice in mills. There was pride in Susila’s voice, though, when she talked about the skill they would bring even to that incredibly difficult work. “We can work very hard and very carefully. At the end of a day’s work, we wouldn’t have broken the tips of even a single grain of rice during the de-husking process.”\r\n\r\nHowever, it was their skill with snakes that brought them an invitation from the Florida Fish and Wildlife Conservation Commission. Two members of the collective, Masi and Vadivel, flew half way across the world to participate in a project aimed at curbing the extensive problem of Burmese pythons in the Everglades National Park. These enormous snakes have established a large breeding population in the Everglades, and are threatening endangered populations of small mammals in the national park.\r\n\r\nOver a span of two months, after 60 forays into the Everglades, Masi and Vadivel captured 34 pythons. Trained sniffer dogs as well as American hunters were unable to match this efficiency. “[The Irulas] are our best bet,” said Joe Wasilewski, a wildlife expert with the University of Florida, speaking about a long-term solution for protecting endangered species from Burmese pythons.\r\n\r\nThere are multiple sources of pressure on the Irulas and their way of life, though. Rajendran is worried about the urban sprawl inching towards Vadanemmeli and commercial establishments encroaching into wild spaces. Chennai is home to more than seven million people and is spreading in all directions. Vadanemmeli may be slowly swallowed by the growing city; the road to the village is already flanked by glass-fronted showrooms and swanky weekend homes. Closer to the venom extraction site, high-end resorts are cropping up with views of the bay and its backwaters.\r\n\r\nAdditionally, the World Health Organization has recommended that antivenom must be generated from snakes that remain completely in captivity. This means that the demand for the Irula’s skills may reduce, since they specialise in the capture of wild snakes.\r\n\r\nMasi, Vadivel and Rajendran may also be the last generation of Irulas with this impressive understanding of the reptiles. Most Irula parents want their children to join the mainstream Indian society in some way. A large percentage are enrolled in schools and do not accompany their parents into the forest.\r\n\r\n“Many in the younger generation are even scared of snakes,” Whitaker said.\r\n\r\nOthers, however, continue to have a deep gratitude for the traditional skills of their community. “It was our work with snakes that supported us in difficult times and fed us while we struggled,” said Susila, smiling. “What we learnt from our elders should not disappear with us.”\r\n\r\nI left Vadanemmeli with a slightly keener eye for these reptiles. I wondered, though, whether I would be able to follow Rajendran’s advice if I encountered a cobra in the wild. I somehow doubted I would be able to stand still long enough for it to calm down and slither away. It is much more likely that I would send a prayer to Kanniamma and try to outrun the snake.', 'Known for their ancient and intimate knowledge of snakes, the Irula tribe’s skills form an important but nearly invisible part of the healthcare system in India.', 'http://ichef.bbci.co.uk/wwfeatures/wm/live/624_351/images/live/p0/6l/j6/p06lj64y.jpg', 25, '2018-09-26 07:28:27', NULL, 'en');
INSERT INTO `tintuc` (`MaTinTuc`, `TieuDe`, `NoiDung`, `TomTat`, `AnhMinhHoa`, `NguoiTao`, `NgayTao`, `NgayChinhSua`, `NgonNgu`) VALUES
(11, 'The sinking islands of the Southern US', 'Spanish moss draped over St Helena Island, South Carolina, as Elting Buster Smalls and his children hummed down the earthen path in their 1960s station wagon. It was the summer of 1974, and the harvest from the Smalls’ 20-acre farm – passed down since the late-1800s through their family of newly freed enslaved and runaway West Africans – was bountiful. Smalls and his children packed baskets of fresh honeydew, peanuts and sugar cane, and fish they’d caught in the river, to drop on the porches of local elders who were no longer able to work the land.\r\n\r\nBut today, nearly 50 years after Elting first taught his young daughter Victoria Smalls about the traditions integral to their identity, many Gullah Geechee can no longer work the land, as the land – and thereby the Gullah Geechee way of life – is being rattled by climate change.\r\n\r\nVictoria, the 13th of Elting and his wife Laura’s 14 children, grew up Gullah – a word she didn’t actually learn until after college in the early 1990s. (Colloquially, Gullah distinguishes whether a Gullah Geechee individual lives north of the Savannah River, while those south of it are referred to as Geechee.) For Victoria, Gullah Geechee wasn’t the mystic, isolated culture of inherited Africanisms and Southern landscapes that had become of interest to 21st-Century academics, tourists and hungry land developers.\r\n\r\n“It was just our way of life,” said Victoria, who later moved from St Helena to Charleston, South Carolina, to work on the International African American Museum, which, when it opens in 2020, will illuminate South Carolina’s global historical significance and show the role enslaved Africans and free blacks had in shaping the US.\r\n\r\nThe Gullah Geechee are descendants of Central and West Africans who are believed to have been trafficked into what is known as the Low Country for their expertise in coastal rice farming and irrigation systems. After the American Civil War ended in 1865, Union General William T Sherman established Special Field Order 15, which designated 400,000 acres of land along the coastline of the Southern US, from South Carolina to Florida, to newly freed black families in parcels of roughly 40 acres each. The isolated geography, which is spread out over 12,000 sq miles known as the Gullah Geechee Corridor, created insulated coastal and island communities, most of which were at least 90% black, with well-preserved cultural traditions.\r\n\r\nGullah Geechee religion incorporates Christianity with African belief systems, much of which was reflected in the lessons Victoria was taught as a child. Respect for nature, as well as elders and community, was sacred. African crafts were passed down for necessity, like cast nets and flat-bottomed boats known as ‘bateau boats’, which Victoria said are based off the West African dugout and redesigned to easily navigate shallow shores and waterways. The craft of sewing pieces of cloth into large, colourful patterns was combined with European quilting to become a creole art form that also allowed Gullah Geechee women to sit and socialise.\r\n\r\n“We didn’t have a bridge on [St Helena] until 1939. The island was like an incubator for the culture, the language. You don’t hear it now, but when I was growing up I had a very thick accent,” Victoria said.\r\n\r\nThe Gullah Geechee Cultural Heritage Corridor, which strives to preserve the Gullah Geechee sites and stories, describes the Gullah Geechee language as a creole dialect that sprung from the linguistic influences of “European slave traders, slave owners and diverse African ethnic groups”.\r\n\r\n“Beaufort was only 7 miles away, and when I was four, five, up to 10 years old, people would laugh at me in Beaufort, even the blacks who were still Gullah Geechee people,” Victoria said. “The nurturing you received on St Helena Island was so wonderful that the language and the way of life and working the land, farming, living off the water and living in tight-knit communities – it was so different than that just 7 miles inland on the mainland.”\r\n\r\nToday, the pejorative perception of the Gullah Geechee being uneducated or backcountry has shifted to one in which the identity is celebrated, both by academics and those who grew up in the culture. Yet the Gullah Geechee ways are slipping away.\r\n\r\nAccording to Dr Albert George II, director of conservation at the South Carolina Aquarium who was raised Gullah Geechee, individuals residing in the more isolated communities such as St Helena still subsist on their own agriculture, sourcing food from their farms and gardens and fish from the waterways rather than going to the grocery store. But due to environmental changes, such as rising sea levels and salt water erosion, connecting to the earth through food is becoming a complicated feat.\r\n\r\nClimate change is taking away hundreds of years of cuisine and culture\r\n\r\nShrimp, for example, is an integral ingredient in several Gullah Geechee dishes eaten throughout the South, such as the popular low country boil, which to the Gullah Geechee was considered a ‘slop pot’, a way to use all the leftovers from the fridge before they went bad. But “shellfish need a certain level of water quality and salinity. Oysters, clams – you see serious shifts in their ability to propagate in [the] environment,” George said. “These people are experiencing changes to their land, a shift in habitat and [a] shift of what’s in the water itself. Climate change is taking away hundreds of years of cuisine and culture.”\r\n\r\nHe continued: “Some places in the Gullah Geechee Corridor are experiencing subsidence from climate change and land development factors like building upon sand-based soils or wetlands in the Charleston peninsula. In these areas, the land is actually sinking.”\r\n\r\nGeorge, however, is determined that Gullah Geechee culture will not disappear. His father was a proud Gullah Geechee man who told him “unless there was rice with the meal, it wasn’t a full dinner.” As homage to the crop that is agriculturally obsolete in most Gullah Geechee farming communities, George founded RICE (Resilience Initiative for Coastal Education).\r\n\r\nRICE strives to open a “two-way flow of communication,” George said, between the Gullah Geechee and the local municipal, county, business and state government leaders. He hopes this will help establish a long-term plan to preserve the land and culture for the Gullah Geechee people in the wake of what is arguably one of the most harrowing issues the world faces today.\r\n\r\n“Growing up, you didn’t evacuate for a hurricane,” Victoria said. “We let our horses roam free… and they would always come back. Somehow our community knew where the animals were from – what belonged to whom. I remember not even boarding up our windows.”\r\n\r\nAll we have now is our name\r\n\r\nSince Hurricane Matthew hit the island in October 2016, Victoria said flooding has become a major issue, and not just during hurricanes. During high tide and torrential rain, the land bridge floods and becomes impassable, and entire crops have been wiped out.\r\n\r\n“All we have now is our name. We’re the last Saltwater Geechee [island dwellers as opposed to the mainland’s Freshwater Geechee] on Sapelo,” said Maurice Bailey, a resident of Sapelo Island, Georgia’s only remaining Gullah Geechee community, Hogg Hummock, and vice president of the Sapelo Island Cultural and Revitalization Society (SICARS).\r\n\r\n“Our lifestyle is surviving… We grew up farming, hunting, preserving meats. Our lifestyle was rough, but we didn’t know how rough ‘til we got older,” he said.\r\n\r\nNow, the Sapelo community cannot thrive on farming alone and many of its residents have left the island to either find work or love – as most who remain are related by blood. Bailey is spearheading an effort to plant a 10-acre community garden and honeybee hive so Sapelo residents will have a means of revenue growing and selling produce at markets on the mainland. So far, they’ve planted purple ribbon sugar cane as well as red peas, a much smaller version of red kidney beans, that were brought over as seeds from Africa and are used in a traditional Gullah Geechee beans-and-rice dish called Hoppin’ John.\r\n\r\nWhen Bailey was a boy, Sapelo Island had close to 300 people living on it. Today, he said there are only 29 Gullah Geechee left. Some traditions still live on, like eating Hoppin’ John on New Year’s, farming in the community gardens and gathering around at night by the camp fire – the dwindling community of elders and children seated together. But other cherished ways, like placing baskets of food on a neighbour’s porch, are almost completely obsolete.\r\n\r\nAlmost.\r\n\r\n“My 16-year-old son died four years ago. While I was trying to heal, someone left a bag of beautiful squash, peppers – just a wonderful bounty on my steps and I didn’t know who it was,” Victoria said.\r\n\r\nAt the time, Victoria still lived on St Helena Island. The gift was a reminder of her past, of her Gullah Geechee roots, of her father, Elting, who died in 1992 but cast lessons of community and love upon his children the way he once cast his shrimp net into the water. With climate change, these nets may not sweep up the same bounty they once did, but individuals like Victoria, George and Bailey are not letting their heritage die out.\r\n\r\n“At some point, based on predictions, we will have to move. Yes, there would be culture lost, but we’re resilient people. I mean we were able to keep a lot of our Africanisms intact,” Victoria said, the echo of her father’s commanding voice sturdy in her tone. “We may be able to keep some of our culture in the palm of our hands – the way someone maybe carried some seeds in their palm as they were carried on a ship from West Africa.”', 'The rich traditions of the Gullah Geechee are at risk of being lost, threatened by what is arguably one of the most harrowing issues the world faces today.', 'http://ichef.bbci.co.uk/wwfeatures/wm/live/624_351/images/live/p0/6k/8l/p06k8l8k.jpg', 25, '2018-09-26 09:07:31', NULL, 'en'),
(12, 'The islands with a \'third gender\'', 'As our old, rickety sailboat glides effortlessly over the calm waters of the Caribbean, I am overwhelmed by the feeling we’ve just arrived in paradise. Scattered across the turquoise blue waters, the tiny islands of glistening white sand, covered in palm trees and green coconuts, look too perfect to be real.\r\n\r\nThis is Guna Yala, also known as San Blas: an archipelago off Panama’s eastern coast that contains more than 300 islands, 49 of which are inhabited by the indigenous Guna people. More than 50,000 strong, the Gunas still live as their ancestors did, dwelling in small wooden shacks covered with palm leaves, with logs smouldering in the fireplaces and hammocks representing the only furniture.\r\n\r\nGuna Yala is extraordinary in many ways: it is an autonomous indigenous territory, and its flag sports a black, left-facing swastika, said to represent the four directions and the creation of the world. But perhaps the most curious tradition in Guna Yala is its natural gender equality – and complete tolerance, if not celebration, of gender fluidity.\r\n\r\n“My mother taught me how to make these beautiful molas, our traditional embroidered clothes,” Lisa said, showing me her amazing needlework. “Some of these represent birds and animals, but some are very powerful – they will protect you from evil spirits,” she added, smiling softly.\r\n\r\nFor an onlooker like me, there isn\'t anything unusual about Lisa. Much like many other Guna women, she’s sitting in her small dug-out canoe and offering her beautiful handicrafts to tourist boats. Except Lisa was born a boy. In a society where women are the main food distributors, property owners and decision makers, boys may choose to become Omeggid, literally ‘like a woman’, where they act and work like other females in the community.\r\n\r\nThis ‘third gender’ is a completely normal phenomenon on the islands. If a boy begins showing a tendency towards acting ‘female’, the family naturally accepts and allows him to grow up as such. Very often, Omeggid will learn a skill that is typically associated with women; for example, most Omeggid living on the islands become masters at crafting the most intricate molas.\r\n\r\nDiego Madi Dias, an anthropologist and post-doctoral researcher at the University of Sao Paulo, lived among the Guna for more than two years and has seen first-hand that the powerful matriarchal figures in Guna culture are a major influence on the Guna men.\r\n\r\n“The Guna have taught me that children should have sufficient autonomy, as their ‘self’ comes from the heart, from within, and starts manifesting early. So if a male child starts showing a tendency toward being transgender, (s)he is not prevented to be himself,” he said.\r\n\r\nTheir ‘self’ comes from the heart, from within\r\n\r\nNandín Solís García, a transgender health educator and LGBTQ rights activist in Panama City, originally from the Aggwanusadub and Yandub island communities of Guna Yala, told me that growing up as a gay, gender-fluid boy wasn’t difficult on the islands because she always had the support of her family, friends and community. It is mostly males that become transgender women – female transitions to male are extremely rare, but the latter would be equally accepted, she explained.\r\n\r\n“Historically, there were always transgender people among the Guna,” she said.\r\n\r\nIn fact, being Omeggid in Guna Yala stems all the way back to Guna mythology.\r\n\r\n“There are important creation stories about the original leaders who brought the traditions, rules and guidelines for the Guna people to live by: a man named Ibeorgun, his sister Gigadyriai and his little brother Wigudun – a figure that belonged to what we would call the ‘third gender’,” Dias said, explaining that Wigudun is both female and male.\r\n\r\nWalking down the streets on Crab Island, one of the biggest communities in the touristic area of Guna Yala, I notice women everywhere. Dressed in beautifully embroidered traditional clothes, they’re working on their handicrafts, tending small shops and selling food and drinks. Contrary to many other Central American countries, Guna women seem more outgoing and chatty: striking up a conversation here is much easier than in the streets of Guatemalan or Nicaraguan villages.\r\n\r\nAccording to David, my guide on Crab Island, women in Guna Yala enjoy an elevated status. A traditional Guna wedding includes a ceremonial abduction of the groom, not the bride, and when a young man is married off, he moves into the bride’s home. From that point on, his work belongs to the woman’s family, and it’s the woman who decides whether her husband can share his fish, coconuts or plantains with his own parents or siblings.\r\n\r\nEven the partying here, David said, is done to honour women: the three most important celebrations in the Guna Yala islands are a girl\'s birth, her puberty and her marriage. The whole community gathers to drink chicha, a strong local beer, to celebrate girlhood and womanhood. During the puberty celebration, a girl’s septum is pierced and adorned with a golden ring.\r\n\r\n“Gold is treasure, so women wear gold to show how precious and valuable they are,” an elderly Guna woman told me, pointing at her own golden nose ring.\r\n\r\nAlthough men traditionally become fishermen, hunters, farmers or chiefs, women’s work is considered just as, or sometimes, more important. With tourism on the rise, the Gunas are beginning to earn money from sources other than their ancestral trades of collecting coconuts, diving for lobster, fishing and farming. Guna women can make a substantial income by selling intricately embroidered molas and winis (colourful bracelets made from glass beads). One mola can sell for $30-$50, whereas a man will only make $20 in a whole day spent cleaning the bottom of a visiting sailboat.\r\n\r\nI think masculinity is sometimes seen as difficult to achieve\r\n\r\n“I wouldn’t say Guna is a matriarchy, because while women make all the domestic decisions, they are rarely politicians or chiefs. Yet, the thing about the Guna is that there’s no hierarchy of the value of work. Fishing and hunting is considered work, but so is cooking or looking after children: the Gunas do not consider women’s labour to be ‘lesser work’, like we sometimes still do in the West. But because it’s the young man who moves into the young woman’s home, and because the woman becomes the distributor of food, I think masculinity is sometimes seen as difficult to achieve,” Dias said.\r\n\r\nDavid admits that his marriage had been arranged by his and his wife’s parents, and that he has little say over the property or the sharing of food in his home. “My wife decides… Women always decide,” he said, smiling, before hurrying off to prepare the chicha. Today, his daughter reaches puberty, and the whole of Crab Island will be celebrating.\r\n\r\nBut while women have a defined role in the Guna society, the Omeggid sometimes do not.\r\n\r\n“As more and more Gunas come into contact with Westernisation, we sadly begin to adopt the discriminatory practices towards diversity, towards LGBTQ people,” Garcia said.\r\n\r\nAccording to Garcia, many Omeggid leave Guna Yala for Panama City, looking for education or career opportunities. And while dreams come true for some, others fare much worse.\r\n\r\n“We have a big problem with HIV in the community. In Guna Yala, there is no sex education, and people simply don’t know about sexually transmitted diseases. As a result, many [men and] Omeggid people become infected with HIV in the cities, and then, unknowingly, bring it back to the Guna islands when they return home. Wigudun Galu [a non-governmental organisation] is working to prevent HIV infection and offer sex education to the Omeggid community,” she said.\r\n\r\nBut despite these issues, the Omeggid who stay in Guna Yala are thriving. Both on the bigger island communities and smaller, family-sized islets, they are omnipresent. Young Omeggid with long hair learn needlework from their mothers, and older Omeggid wearing headscarves sell molas or act as tour guides and translators for tourists. They are treated as equal members of Guna families and within the community.\r\n\r\n“I think, instead of only describing how the indigenous peoples are or how they live, anthropology should perhaps help us to examine our own traditions. Throughout ages, across continents and cultures, gender fluidity and the concept of a third gender consistently reappears: the hijras in India; the Meti in Nepal; the Fa’afafine in Samoa; the ‘two-spirit’ people in North America. They are not the exception, we are. Western tradition has constructed a scientific mythology on gender binarism. And it seems, at the end of the day, that gender isn’t so much about biology, hormones and science as it is about the expression of self and a personal, particular way of being in the world,” Dias said.\r\n\r\nThey are not the exception, we are\r\n\r\nAs Lisa pushes off our sailboat, her little canoe lolling in the shimmering blue sea, I can’t help but think that Guna Yala seems like a wonderfully alternative world of peace, tolerance and understanding – and that there’s a lot we could learn from this tiny archipelago community in the Caribbean.', 'In the small indigenous territory of Guna Yala off Panama’s eastern coast, a flourishing ‘third gender’ community is defying stereotypes – and venerating women.', 'http://ichef.bbci.co.uk/wwfeatures/wm/live/624_351/images/live/p0/6h/3m/p06h3mkm.jpg', 26, '2018-09-26 03:42:09', NULL, 'en'),
(15, 'How do you decaffeinate coffee?', 'If you’re partial to a cup of coffee minus the caffeine, then next time you’ve boiled the kettle you should raise your mug in memory of Friedlieb Ferdinand Runge.\r\n\r\nRunge was a 19th-Century German chemist who had come to the attention of Goethe – the poet and statesman who was also a keen science scholar. Goethe had heard of Runge’s groundbreaking investigation into belladonna, otherwise known as nightshade. Runge had isolated the compound that caused eye muscles to dilate if it was ingested.\r\n\r\nGoethe had been recently given a case of coffee beans, and so he asked Runge to perform an analysis of the beans. What Runge discovered is arguably the most consumed drug in the modern world – caffeine.\r\n\r\nCaffeine is present in other drinks and foods – notably tea and chocolate – but it is inextricably linked with coffee. It’s a stimulant and an appetite suppressant, a dependable pick-me-up for students cramming for exams, workers on nightshifts and anyone else needing a wake-up.\r\n\r\nBut caffeine has a darker side, too.\r\n\r\nIt can cause anxiety, insomnia, diarrhoea, excess sweating, racing heartbeat and muscle tremors. For many people, the pleasure of drinking coffee is outweighed by the caffeine-fuelled negatives.\r\n\r\nCould caffeine be removed from coffee? The answer, as any supermarket aisle will tell you, is yes – but the process isn’t as simple as you might think.\r\n\r\nThe first person to hit upon a practical decaffeination method was another German, Ludwig Roselius, the head of the coffee company Kaffee HAG. Roselius discovered the secret to decaffeination by accident. In 1903, shipment of coffee had been swamped by seawater in transit – leaching out the caffeine but not the flavour. Roselius worked out an industrial method to repeat it, steaming the beans with various acids before using the solvent benzene to remove the caffeine. Decaffeinated coffee was born.\r\n\r\nBenzene, it turned out, was a possible carcinogen, so the search was on for new techniques that could prise out the caffeine from the beans – and yet leave the flavour intact.\r\n\r\nChris Stemman, the executive director of the British Coffee Association, says most of those techniques from decaffeination’s earliest days are still being used today. But the process isn’t as straightforward as you’d expect.\r\n\r\n“It isn’t done by the coffee companies themselves,” says Stemann. “There are specialist decaffeination companies that carry it out.” Many of these companies are based in Europe, Canada, the US and South America.\r\n\r\nIf you were to try and decaffeinate roasted coffee you’d end up making something that tastes a bit like straw – Chris Stemman\r\n\r\nYou might think that it would be easier to roast the coffee, grind it into the required powder (espresso, filter or instant) and then begin the decaffeination process. Not, so says Stemman.\r\n\r\n“It takes place when the coffee is green, before roasting.\r\n\r\n“If you were to try and decaffeinate roasted coffee you’d end up making something that tastes a bit like straw. So that’s why with 99.9% of decaffeinated coffee to this day, the process is done at the green coffee stage.”\r\n\r\nThere are several ways to decaffeinate coffee but the most prevalent is to soak them in a solvent – usually methylene chloride or ethyl acetate. Methylene chloride can be used as a paint stripper and a degreaser as well an agent to remove caffeine.\r\n\r\nEthyl acetate, meanwhile, is a natural fruit ether usually made from acetic acid – the building block of vinegar – and it’s also used to make nail polish remover (it has a distinctive sweet smell, much like pear drops).\r\n\r\nThe beans are first soaked in water and then covered in a solution containing either of these solvents. The caffeine is then drawn out by the solvent.\r\n\r\nThe solvent-laced water is then reused again and again until it is packed with coffee flavourings and compounds – pretty much identical to the beans, except for the caffeine and solvent. By this stage in the process the beans lose very little flavouring because they’re essentially soaked in a concentrated coffee essence.\r\n\r\nSoaking coffee beans in solvents doesn’t sound like a particularly healthy enterprise, but both of these agents have got a clean bill of health. In 1985 the US’s Food and Drug Administration said the likelihood of any health risk from methylene chloride was so low “as to be essentially non-existent”. (FDA rules allow up to 10 parts per million of residual methylene, but coffee decaffeination usually uses solutions with one part per million).\r\n\r\nDecaffeination became much more widespread as instant coffee became a staple\r\n\r\nTwo other methods use water. The Swiss Water method sees the beans soaked with water; the caffeine rich solution (full of flavours) is then strained though activated carbon which captures the caffeine. Starting in Switzerland in the 1930s, the process was first used commercially in 1979. It gained favour because it was the first decaffeination method not to use solvents.\r\n\r\nThere is another method, Stemman says, which involves the use of “super critical carbon dioxide”.  Beans that have been soaked in water are put in a stainless-steel extractor which is then sealed, and liquid CO2 blasted in at pressures of up to 1,000lbs per square inch. Like the Swiss Water method, it’s the C02 which binds with the caffeine molecules, drawing them out of the unroasted bean. The gas is then drawn off and the pressure is lowered, leaving the caffeine in a separate chamber.\r\n\r\nIt’s an ingenious method but it does have one big drawback, according to Stemman. “It can be enormously expensive.”\r\n\r\nDecaffeination became much more widespread as instant coffee became a staple, says Stemman. But the early incarnations of instant decaff coffee were not a roaring success.\r\n\r\n“If you look back 20 or 30 years ago, we [in the UK] really were a nation of instant coffee drinkers,” he says. “And the one thing that instant coffee didn’t really taste of was coffee. Decaff was even worse.”\r\n\r\nStemman says that as people have become more used to quality coffee – for instance, the UK now boasts some 24,000 coffee shops – this has forced coffee-making companies to find ways of enhancing flavour even in decaffeinated instant coffee.\r\n\r\n“Decaffeination can be a complicated piece of chemistry, which is why there are these very sophisticated companies doing it.”\r\n\r\nThe centenary of decaffeination – 2006 – went by with little in the way of public fanfare. In the UK at least, the number of people stumping for a decaff coffee has fallen markedly even as the quality has improved – while as many as 15% of coffee drinkers chose decaffeinated brews in the 1980s, that’s fallen to about 8% today.\r\n\r\nAnd does Stemman drink decaffeinated himself? “Generally, no, if I don’t want the caffeine, well I just won’t have a coffee or a tea.”\r\n\r\nAnd there’s another thing. While each of these methods will take most of the caffeine away, there’s no such thing as a completely decaffeinated drink. If you really want to avoid any caffeine at all, it’s probably better to drink something that never had a trace of it in the first place.', 'Some of us love the taste of coffee but can’t deal with the effects of caffeine. So how exactly do you take the caffeine out of a coffee bean?', 'http://ichef.bbci.co.uk/wwfeatures/wm/live/624_351/images/live/p0/6l/fg/p06lfg9y.jpg', 17, '2018-09-17 09:27:16', NULL, 'en'),
(16, 'Is sugar really bad for you?', 'It’s hard to imagine now, but there was a time when humans only had access to sugar for a few months a year when fruit was in season. Some 80,000 years ago, hunter-gatherers ate fruit sporadically and infrequently, since they were competing with birds.\r\n\r\nNow, our sugar hits come all year round, often with less nutritional value and far more easily – by simply opening a soft drink or cereal box. It doesn’t take an expert to see that our modern sugar intake is less healthy than it was in our foraging days. Today, sugar has become public health enemy number one: governments are taxing it, schools and hospitals are removing it from vending machines and experts are advising that we remove it completely from our diets.\r\n\r\nBut so far, scientists have had a difficult time proving how it affects our health, independent of a diet too high in calories. A review of research conducted over the last five years summarised that a diet of more than 150g of fructose per day reduces insulin sensitivity – and therefore increases the risk of developing health problems like high blood pressure and cholesterol levels. But the researchers also concluded that this occurs most often when high sugar intake is combined with excess calories, and that the effects on health are \"more likely\" due to sugar intake increasing the chance of excess calories, not the impact of sugar alone.\r\n\r\nMeanwhile, there is also a growing argument that demonising a single food is dangerous – and causes confusion that risks us cutting out vital foods.\r\n\r\nSugar, otherwise known as ‘added sugar’, includes table sugar, sweeteners, honey and fruit juices, and is extracted, refined and added to food and drink to improve taste.\r\n\r\nBut both complex and simple carbohydrates are made up of sugar molecules, which are broken down by digestion into glucose and used by every cell in the body to generate energy and fuel the brain. Complex carbohydrates include wholegrains and vegetables. Simple carbohydrates are more easily digested and quickly release sugar into the bloodstream. They include sugars found naturally in the foods we eat, such as fructose, lactose, sucrose and glucose and others, like high fructose corn syrup, which are manmade.\r\n\r\nBefore the 16th Century only the rich could afford sugar. But it became more available with colonial trade.\r\n\r\nThen, in the 1960s, the development of large-scale conversion of glucose into fructose led to the creation of high fructose corn syrup, a concentrate of glucose and fructose.\r\n\r\nThis potent combination, above any other single type of sugar, is the one many public health advocates consider the most lethal – and it is the one that many people think of when they think of ‘sugar’.\r\n\r\nSugar rush\r\n\r\nConsumption of high fructose corn syrup in the US increased tenfold between 1970 and 1990, more than any other food group. Researchers have pointed out that this mirrors the increase in obesity across the country.\r\n\r\nMeanwhile, sugary drinks, which usually use high fructose corn syrup, have been central to research examining the effects of sugar on our health. One meta-analysis of 88 studies found a link between sugary drinks consumption and body weight. In other words, people don’t fully compensate for getting energy from soft drinks by consuming less of other foods – possibly because these drinks increase hunger or decrease satiety.\r\n\r\nBut the researchers concluded that while the intake of soft drinks and added sugars has increased alongside obesity in the US, the data only represents broad correlations.\r\n\r\nAnd not everyone agrees that high fructose corn syrup is the driving factor in the obesity crisis. Some experts point out that consumption of the sugar has been declining for the past 10 years in countries including the US, even while obesity levels have been rising. There also are epidemics of obesity and diabetes in areas where there is little or no high fructose corn syrup available, such as Australia and Europe.\r\n\r\nHigh fructose corn syrup isn’t the only kind of sugar seen as problematic. Added sugar, particularly fructose, is blamed for a variety of problems.\r\n\r\nPeople who consumed 25% or more of calories as added sugar were more than twice as likely to die from heart disease\r\n\r\nFor one, it’s said to cause heart disease. When liver cells break down fructose, one of the end products is triglyceride – a form of fat – which can build up in liver cells over time. When it is released into the bloodstream, it can contribute to the growth of fat-filled plaque inside artery walls.\r\n\r\nOne 15-year study seemed to back this up: it found that people who consumed 25% or more of their daily calories as added sugar were more than twice as likely to die from heart disease than those who consumed less than 10%. Type 2 diabetes also is attributed to added sugar intake. Two large studies in the 1990s found that women who consumed more than one soft drink or fruit juice per day were twice as likely to develop diabetes as those who rarely did so.\r\n\r\nSweet nothings?\r\n\r\nBut again, it’s unclear if that means sugar actually causes heart disease or diabetes. Luc Tappy, professor of physiology at the University of Lausanne, is one of many scientists who argue that the main cause of diabetes, obesity and high blood pressure is excess calorie intake, and that sugar is simply one component of this.\r\n\r\n“More energy intake than energy expenditure will, in the long term, lead to fat deposition, insulin resistance and a fatty liver, whatever the diet composition,” he says. “In people with a high energy output and a matched energy intake, even a high fructose/sugar diet will be well tolerated.”\r\n\r\nOverall, evidence that added sugar directly causes type 2 diabetes, heart disease, obesity or cancer is thin\r\n\r\nTappy points out that athletes, for example, often have higher sugar consumption but lower rates of cardiovascular disease: high fructose intake can be metabolised during exercise to increase performance. \r\n\r\nOverall, evidence that added sugar directly causes type 2 diabetes, heart disease, obesity or cancer is thin. Yes, higher intakes are associated with these conditions. But clinical trials have yet to establish that it causes them.\r\n\r\nSugar also has been associated with addiction… but this finding, too, may not be what it seems. A review published in the British Journal of Sports Medicine in 2017 cited findings that mice can experience sugar withdrawal and argued that sugar produces similar effects to cocaine, such as craving. But the paper was widely accused of misinterpreting the evidence. One key criticism was that the animals were restricted to having sugar for two hours a day: if you allow them to have it whenever they want it, which reflects how we consume it, they don’t show addiction-like behaviours.\r\n\r\nStill, studies have demonstrated other ways in which sugar affects our brains. Matthew Pase, research fellow at Swinburne’s Centre for Human Psychopharmacology in Australia, examined the association between self-reported sugary beverage consumption and markers of brain health determined by MRI scans. Those who drank soft drinks and fruit juices more frequently displayed smaller average brain volumes and poorer memory function. Consuming two sugary drinks per day aged the brain two years compared to those who didn’t drink any at all. But Pase explains that since he only measured fruit juice intake, he can’t be sure that sugar alone is what affects brain health.\r\n\r\n“People who drink more fruit juice or soft drinks may share other dietary or lifestyle habits that relate to brain health. For example, they may also exercise less,” Pase says.\r\n\r\nOne recent study found that consuming sugar can make older people more motivated to perform difficult tasks\r\n\r\nOne recent study found that sugar may even help improve memory and performance in older adults. Researchers gave participants a drink containing a small amount of glucose and asked them to perform various memory tasks. Other participants were given a drink containing artificial sweetener as a control. They measured the participants\' levels of engagement, their memory score, and their own perception of how much effort they’d applied.\r\n\r\nThe results suggested that consuming sugar can make older people more motivated to perform difficult tasks at full capacity – without them feeling as if they tried harder. Increased blood sugar levels also made them feel happier during the task.\r\n\r\nYounger adults showed increased energy after consuming the glucose drink, but it didn’t affect their mood or memory.\r\n\r\nTeaspoon of sugar\r\n\r\nWhile current guidelines advise that added sugars shouldn\'t make up more than 5% of our daily calorie intake, dietitian Renee McGregor says it’s important to understand that a healthy, balanced diet is different for everyone.\r\n\r\n“I work with athletes who need to take on more sugar when doing a hard session because it’s easily digestible. But they worry they’re going over the guidelines,” she says.\r\n\r\nFor most of us non-athletes, it’s true that added sugar isn’t crucial for a healthy diet. But some experts warn we shouldn’t single it out as toxic.\r\n\r\nMcGregor, whose clients include those with orthorexia, a fixation with eating healthily, says that it isn’t healthy to label foods as ‘good’ or ‘bad’. And turning sugar into a taboo may only make it more tempting. “As soon as you say you can’t have something, you want it,” she says. “That’s why I never say anything is off-limits. I’ll say a food has no nutritional value. But sometimes foods have other values.”\r\n\r\nAssociate professor at James Madison University Alan Levinovitz studies the relationship between religion and science. He says there’s a simple reason we look at sugar as evil: throughout history, we’ve demonised the things we find hardest to resist (think of sexual pleasure in the Victorian times).\r\n\r\nToday, we do this with sugar to gain control over cravings.\r\n\r\nSugar is intensely pleasurable, so we have to see it as a cardinal sin – Alan Levinovitz\r\n\r\n“Sugar is intensely pleasurable, so we have to see it as a cardinal sin. When we see things in simple good and evil binaries, it becomes unthinkable that this evil thing can exist in moderation. This is happening with sugar,” he says.\r\n\r\nHe argues that that seeing food in such extremes can make us anxious about what we’re eating – and add a moral judgment onto something as necessary, and as everyday, as deciding what to eat.\r\n\r\nTaking sugar out of our diets can even be counterproductive: it can mean replacing it with something potentially more calorific, such as if you substitute a fat for a sugar in a recipe.\r\n\r\nAnd amid the rising debate around sugar, we risk confusing those foods and drinks with added sugar that lack other essential nutrients, like soft drinks, with healthy foods that have sugars, like fruit.\r\n\r\nOne person who struggled with this distinction is 28-year-old Tina Grundin of Sweden, who says she used to think all sugars were unhealthy. She pursued a high-protein, high-fat vegan diet, which she says led to an undiagnosed eating disorder.\r\n\r\n“When I started throwing up after eating, I knew I couldn’t go on much longer. I’d grown up fearing sugar in all forms,” she says. “Then I realised there was a difference between added sugar and sugar as a carbohydrate and I adopted a high-fructose, high-starch diet with natural sugars found in fruit, vegetables, starches and legumes.\r\n\r\n“From the first day, it was like the fog lifted and I could see clearly. I finally gave my cells fuel, found in glucose, from carbohydrates, from sugars.”\r\n\r\nWhile there’s disagreement around how different types of sugars affect our health, the irony is we might be better off thinking about it less.\r\n\r\n“We’ve really overcomplicated nutrition because, fundamentally, what everyone is searching for is a need to feel complete, to feel perfect and successful,” says McGregor. “But that doesn’t exist.”', 'People who eat more sweets are at higher risk of type 2 diabetes, heart disease and cancer… but that may not actually be sugar’s fault. BBC Future investigates the latest findings.', 'http://ichef.bbci.co.uk/wwfeatures/wm/live/624_351/images/live/p0/6l/h2/p06lh256.jpg', 24, '2018-09-29 18:12:35', NULL, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `traloi`
--

CREATE TABLE `traloi` (
  `MaCauHoi` int(11) NOT NULL,
  `STT` int(11) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `DapAn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `traloi`
--

INSERT INTO `traloi` (`MaCauHoi`, `STT`, `A`, `B`, `C`, `D`, `DapAn`) VALUES
(1, 101, 'effect', 'effective', 'effecting', 'effected', 'effective'),
(2, 102, 'his', 'its', 'their', 'theirselves', 'their'),
(3, 103, 'taken', 'given', 'played', 'stationed', 'taken'),
(4, 104, 'shut down', 'close', 'turn off', 'cancel', 'turn off'),
(5, 105, 'in', 'against', 'between', 'on', 'on'),
(6, 106, 'prediction', 'perfection', 'perdition', 'permission', 'perfection'),
(7, 107, 'to bring', 'bringing', 'brought', 'brings', 'bringing'),
(8, 108, 'totally', 'very', 'temporarily', 'finally', 'finally'),
(9, 109, 'so', 'as', 'because', 'and', 'so'),
(10, 110, 'card', 'permit', 'license', 'identification', 'license'),
(11, 111, 'through with', 'down to', 'out of', 'used up', 'out of'),
(12, 112, 'invited', 'invites', 'invite', 'inviting', 'invites'),
(13, 113, 'expunges', 'finishes', 'cancels', 'expires', 'expires'),
(14, 114, 'at', 'near', 'over', 'on', 'at'),
(15, 115, 'sustaining', 'sustained', 'sustainable', 'sustains', 'sustainable'),
(16, 116, 'credential', 'requirement', 'legality', 'certificate', 'requirement'),
(17, 117, 'to review', 'reviewing', 'reviewed', 'reviews', 'reviewing'),
(18, 118, 'quickly', 'exponentially', 'substantially', 'gradually', 'gradually'),
(19, 119, 'Unless', 'Until', 'If', 'Because', 'Unless'),
(20, 120, 'gone', 'come', 'been', 'went', 'been'),
(21, 121, 'red', 'green', 'black', 'yellow', 'black'),
(22, 122, 'recipe', 'reception', 'receptacle', 'receipt', 'receipt]'),
(23, 123, 'their', 'its', 'his', 'our', 'its'),
(24, 124, 'was sleeping', 'had been sleeping', 'slept', 'sleep', 'was sleeping'),
(25, 125, 'soonest', 'least', 'earliest', 'quickest', 'earliest'),
(26, 126, 'spent', 'cost', 'lastest', 'paid', 'cost'),
(27, 127, 'little', 'few', 'several', 'short', 'few'),
(28, 128, 'raise', 'qualification', 'advance', 'promotion', 'promotion'),
(29, 129, 'her', 'their', 'his', 'us', 'his'),
(30, 130, 'would', 'should', 'could', 'won\'t', 'would'),
(31, 131, 'beside', 'after', 'over', 'before', 'after'),
(32, 132, 'scarcity', 'scariness', 'sacrifice', 'synchronicity', 'scarcity'),
(33, 133, 'ordering', 'orders', 'to order', 'ordered', 'to order'),
(34, 134, 'rather for', 'prefer for', 'betther than', 'instead of', 'instead of'),
(35, 135, 'makeup', 'takeover', 'takeoff', 'pulldown', 'takeover'),
(36, 136, 'depending', 'dependent', 'depended', 'dependable', 'dependent'),
(37, 137, 'but', 'and', 'so', 'therefore', 'but'),
(38, 138, 'deposit', 'contribution', 'subsidy', 'donation', 'subsidy'),
(39, 139, 'whenever', 'whatever', 'whichever', 'whoever', 'whichever'),
(40, 140, 'put out', 'pushed down', 'sent up', 'laid off', 'laid off'),
(41, 141, 'amount', 'total', 'value', 'price', 'amount'),
(42, 142, 'had', 'haven\'t', 'have', 'having', 'have'),
(43, 143, 'on', 'at', 'in', 'as', 'at'),
(44, 144, 'environment', 'environments', 'environmental', 'environmentally', 'environmentally'),
(45, 145, 'charge', 'money', 'cash', 'guarantee', 'charge'),
(46, 146, 'and', 'by', 'through', 'until', 'through'),
(47, 147, 'would', 'should', 'could', 'must', 'should'),
(48, 148, 'explain', 'explains', 'explained', 'explaining', 'explaining'),
(49, 149, 'next to', 'of', 'between', 'after', 'between'),
(50, 150, 'agreement', 'conversation', 'argument', 'election', 'agreement'),
(51, 151, 'receiving', 'receiver', 'receipt', 'receive', 'receipt'),
(52, 152, 'make', 'tear', 'draw', 'get', 'draw'),
(53, 153, 'A 20-percent discount', 'Reduced shipping cost', 'A free 30-day trial', 'A new credit card', 'A free 30-day trial'),
(54, 154, 'By sending in a coupon', 'By making a phone call', 'By e-mailing the company', 'By going to a store', 'By making a phone call'),
(55, 155, 'To announce a new arrangement', 'To reveal the winner of the remodeling bid', 'To inform staff of a suprise change', 'To remind workers that the company is moving', 'To announce a new arrangement'),
(56, 156, 'It is not very big.', 'It occupies several floors.', 'It is a manufacturer.', 'It is relatively new.', 'It occupies several floors.'),
(57, 157, 'E-mail their supervisors', 'Disrupt their routines', 'Move to the fifth floor', 'Prepare ahead of time', 'Prepare ahead of time'),
(58, 158, 'They were college roommates', 'They are related to eacho ther.', 'They are former colleagues.', 'They have not known each other long.', 'They are former colleagues.'),
(59, 159, 'To arrange a date for lunch', 'To inquire about employment', 'To inform of an award', 'To offer congratulations', 'To offer congratulations'),
(60, 160, 'It had sales of $2 million.', 'It was started by Dennis.', 'It began five years ago.', 'It is a one-person business.', 'It had sales of $2 million.'),
(61, 161, 'Hire more workers.', 'Keep working hard.', 'Take a vacation.', 'Plan to retire early.', 'Keep working hard.'),
(62, 162, 'By presenting the coupon to the cashier', 'By ordering two of the items on the coupon', 'By buying a regular Coca Cola', 'By buying one \'Choose 2\' at regular price', 'By buying a regular Coca Cola'),
(63, 163, 'The coupon woll be honored through the end of 2010.', 'The coupon does not apply to delivery orders.', 'With the coupon, two items together will cost $2.50.', 'The coupon is applicable to multiple orders.', 'The coupon is applicable to multiple orders.'),
(64, 164, 'A restauant', 'A hotel', 'A coffee shop', 'A theater', 'A restaurant'),
(65, 165, 'Prices', 'Locations', 'Combination plates', 'Specials', 'Combination plates'),
(66, 166, 'He was a student of Claude Chemmert\'s.', 'He plagiarized the original movie.', 'He is a mediocre actor.', 'He is a skilled director.', 'He is a skilled director.'),
(67, 167, 'Derives much trouble', 'Receives good value', 'Depends on too heavily', 'Cares for irresponsibly', 'Receives good value'),
(68, 168, 'It relies on good acting.', 'Its script is superbly written.', 'It should have been longer.', 'It will be an instant classic.', 'It relies on good acting.'),
(69, 169, 'To solicit a renewal', 'To introduce a magazine', 'To promote a cause', 'To offer a special deal', 'To solicit a renewal'),
(70, 170, 'Try the magazine for free', 'Ask their children\'s opinion', 'Make a telephone call', 'Send in a reply card', 'Send in a reply card'),
(71, 171, 'By offering a free gift', 'By emphasizing its low price', 'By stressing its high quality', 'By enclosing a complimentary issue', 'By stressing its high quality'),
(72, 172, 'They will be offered at a discount.', 'He is excited about their content.', 'They will feature bonus sections.', 'He thinks they will win awards.', 'He is excited about their content.'),
(73, 173, 'It should move to a new location by the end of the month.', 'It should begin an advertising campaign to hire new workers.', 'It should delay moving unless a new facility is found soon.', 'It should reduce its current number of workers by 20 percent.', 'It should delay moving unless a new facility is found soon.'),
(74, 174, 'Seeking legal counsel', 'Having a Board retreat', 'Notifying Board members', 'Introducing a resolution', 'Introducing a resolution'),
(75, 175, 'She was worried about a potential conflict of interest.', 'She is going to be out of town during the selection process.', 'She does not feel knowledgeable enough about computers.', 'She will be leaving the organization shortly.', 'She was worried about a potential conflict of interest.'),
(76, 176, 'Basic', 'Deluxe', 'Super Grande', 'All of them', 'All of them'),
(77, 177, 'It includes a presidential suite.', 'It includes a free newspaper each day.', 'It includes a 30-percent car-rental discount.', 'it includes free one-day admission at Awesome World.', 'It includes a free newspaper each day.'),
(78, 178, '$250', '$500', '$750', '$1,000', '$250'),
(79, 179, 'It is world-famous.', 'It is 20 stories high.', 'It is near Awesome World.', 'It is historic.', 'It is near Awesome World.'),
(80, 180, 'It includes a queen bed.', 'It includes free breakfasts.', 'It includes a car-rental discount.', 'It includes a two-for-one coupon.', 'It includes a two-for-one coupon.'),
(81, 181, 'It products are cheaper than its competitors.', 'There is a large market for disposable plastics.', 'EarthFirst is an old, established brand name.', 'He is reducing the company\'s carbon footprint.', 'There is a large market for disposable plastics.'),
(82, 182, 'ability to decompose', 'ability to fall apart', 'ability to withstand heat', 'ability to hold food', 'ability to decompose'),
(83, 183, 'They are too expensive.', 'They are high quality.', 'Their higher price is justified.', 'They\'re not worth the money.', 'Their higher price is justified.'),
(84, 184, 'To illustrate close-minded thinking', 'To refute a claim made in the article', 'To demonstrate office procedure', 'To make a point about changing perceptions', 'To make a point about changing perceptions'),
(85, 185, 'They biodegrade within 36 months.', 'They can last up to 1,000 years.', 'They are made of low-density polyethylene.', 'They are made of polymers and proteins.', 'They can last up to 1,000 years.'),
(86, 186, 'R01', 'R05', 'R07', 'R10', 'R07'),
(87, 187, 'The right side is damaged.', 'It is on back order.', 'The cover is broken.', 'It is the wrong size.', 'The right side is damaged.'),
(88, 188, 'To complain', 'To empathize', 'To threaten', 'To cajole', 'To complain'),
(89, 189, 'full', 'immediate', 'improved', 'impartial', 'immediate'),
(90, 190, 'They wouldn\'t fit in the delivery truck.', 'They were damaged and had to be returned.', 'Home Matrix did not have them in stock.', 'Joe Buchanan has not paid for them yet.', 'Home Matrix did not have them in stock.'),
(91, 191, '6 a.m.', '6:15 a.m.', '7 a.m', '7:45 a.m.', '6:15 a.m.'),
(92, 192, 'At City Hall', 'In the newspaper', 'At a convenience store', 'In the city library', 'At a convenience store'),
(93, 193, 'disconcerted', 'fascinated', 'furious', 'overjoyed', 'disconcerted'),
(94, 194, 'It is hard to find.', 'It is too crowded.', 'It is poorly signed.', 'It is too far away.', 'It is too far away.'),
(95, 195, 'It is not very busy.', 'It is five miles long.', 'It runs north and south.', 'It parallels Sycamore Street.', 'It runs north and south.'),
(96, 196, 'To promote new classes', 'To announce schedule changes', 'To increase enrollment', 'To proclaim a holiday closure.', 'To announce schedule changes'),
(97, 197, 'One time', 'Two times', 'Three times', 'Two times', 'Two times'),
(98, 198, 'The Kickbox Cardio class is available only on Saturday.', 'The Bootcamp Conditioning class meets early Friday afternoons.', 'BodyWorks Plus Abs classes are held four times a week.', 'The Latin Impact class is held two times each week.', 'BodyWorks Plus Abs classes are held four times a week.'),
(99, 199, 'Because of Thanksgiving', 'Because the instructor is ill', 'Due to a gas leak', 'Due to cleaning work', 'Due to cleaning work'),
(100, 200, 'By telephoning SF Fitness', 'By calling the information line', 'By registering online', 'By seeing Vicki at the front desk', 'By telephoning SF Fitness'),
(101, 1, '(A)', '(B)', '(C)', '(D)', '(A)'),
(102, 2, '(A)', '(B)', '(C)', '(D)', '(B)'),
(103, 3, '(A)', '(B)', '(C)', '(D)', '(A)'),
(104, 4, '(A)', '(B)', '(C)', '(D)', '(C)'),
(105, 5, '(A)', '(B)', '(C)', '(D)', '(C)'),
(106, 6, '(A)', '(B)', '(C)', '(D)', '(B)'),
(107, 7, '(A)', '(B)', '(C)', '(D)', '(C)'),
(108, 8, '(A)', '(B)', '(C)', '(D)', '(D)'),
(109, 9, '(A)', '(B)', '(C)', '(D)', '(A)'),
(110, 10, '(A)', '(B)', '(C)', '(D)', '(D)'),
(111, 11, '(A)', '(B)', '(C)', 'X', '(C)'),
(112, 12, '(A)', '(B)', '(C)', 'X', '(C)'),
(113, 13, '(A)', '(B)', '(C)', 'X', '(A)'),
(114, 14, '(A)', '(B)', '(C)', 'X', '(B)'),
(115, 15, '(A)', '(B)', '(C)', 'X', '(C)'),
(116, 16, '(A)', '(B)', '(C)', 'X', '(A)'),
(117, 17, '(A)', '(B)', '(C)', 'X', '(B)'),
(118, 18, '(A)', '(B)', '(C)', 'X', '(B)'),
(119, 19, '(A)', '(B)', '(C)', 'X', '(A)'),
(120, 20, '(A)', '(B)', '(C)', 'X', '(B)'),
(121, 21, '(A)', '(B)', '(C)', 'X', '(A)'),
(122, 22, '(A)', '(B)', '(C)', 'X', '(C)'),
(123, 23, '(A)', '(B)', '(C)', 'X', '(C)'),
(124, 24, '(A)', '(B)', '(C)', 'X', '(B)'),
(125, 25, '(A)', '(B)', '(C)', 'X', '(B)'),
(126, 26, '(A)', '(B)', '(C)', 'X', '(B)'),
(127, 27, '(A)', '(B)', '(C)', 'X', '(A)'),
(128, 28, '(A)', '(B)', '(C)', 'X', '(B)'),
(129, 29, '(A)', '(B)', '(C)', 'X', '(A)'),
(130, 30, '(A)', '(B)', '(C)', 'X', '(B)'),
(131, 31, '(A)', '(B)', '(C)', 'X', '(B)'),
(132, 32, '(A)', '(B)', '(C)', 'X', '(C)'),
(133, 33, '(A)', '(B)', '(C)', 'X', '(C)'),
(134, 34, '(A)', '(B)', '(C)', 'X', '(A)'),
(135, 35, '(A)', '(B)', '(C)', 'X', '(B)'),
(136, 36, '(A)', '(B)', '(C)', 'X', '(C)'),
(137, 37, '(A)', '(B)', '(C)', 'X', '(C)'),
(138, 38, '(A)', '(B)', '(C)', 'X', '(C)'),
(139, 39, '(A)', '(B)', '(C)', 'X', '(A)'),
(140, 40, '(A)', '(B)', '(C)', 'X', '(A)'),
(141, 41, 'Meet with the president', 'Change an appointment time', 'Come to the oflice later', 'Contact some clients', 'Change an appointment time'),
(142, 42, 'Meet with some clients', 'Go to the emergency room', 'Relocate his office', 'Call the president\'s office', 'Meet with some clients'),
(143, 43, 'At 1 o\'clock', 'At 2 o\'clock', 'At 3 o\'clock', 'At 4 o\'clock', 'At 4 o\'clock'),
(144, 44, 'A delivery service company', 'An Internet provider', 'A mobile phone company', 'An accountant\'s office', 'A mobile phone company'),
(145, 45, 'The price may have risen.', 'The woman has two cell phones.', 'There was an accounting error.', 'The woman may have used her cell phone more than usual.', 'The price may have risen.'),
(146, 46, 'Her invoice number', 'Her telephone number', 'Her monthly balance', 'Her identification number', 'Her telephone number'),
(147, 47, 'The promotion of a coworker', 'The opening of a new oanquet facility', 'The anniversary of the hotel', 'The retirement of a colleague', 'The retirement of a colleague'),
(148, 48, 'At 6:00', 'At 6:30', 'At 7:00', 'At 7:30', 'At 7:00'),
(149, 49, 'To a banquet hall', 'To a hotel lobby', 'To a bakery', 'To a supermarket', 'To a bakery'),
(150, 50, 'He created a new painting.', 'He recently won a prize.', 'He met his favorite artist.', 'He taught his first art workshop.', 'He recently won a prize.'),
(151, 51, 'Take a vacation in the fall', 'Sign up for a workshop', 'Attend an awards banquet', 'Join a group of artists', 'Sign up for a workshop'),
(152, 52, 'An oil painting', 'A workshop manual', 'A watercolor painting', 'A sculpture', 'An oil painting'),
(153, 53, 'At a shipping company', 'At an office building', 'At an office supplies store', 'At a library', 'At an office building'),
(154, 54, 'Help move the supplies', 'Phone his manager', 'Sign the form', 'Open the conference room', 'Sign the form'),
(155, 55, 'A bookshelf', 'A filing cabinet', 'Office supplies', 'Meeting tables', 'A filing cabinet'),
(156, 56, 'An information desk clerk', 'A gift shop owner', 'A parking attendant', 'A supermarket cashier', 'An information desk clerk'),
(157, 57, 'To meet with a boutique owner', 'To visit an art gallery', 'To check her order', 'To walk around a shopping mall', 'To check her order'),
(158, 58, 'Returning another day', 'Calling the shop owner', 'Using a discount coupon', 'Charging her the senior\'s rate', 'Using a discount coupon'),
(159, 59, 'White', 'Silver', 'Black', 'Red', 'White'),
(160, 60, '$ 100', '$ 170', '$ 200', '$ 300', '$ 200'),
(161, 61, 'In about a week', 'In about two weeks', 'In about three weeks', 'In about four weeks', 'In about two weeks'),
(162, 62, 'He doesn\'t know where the HR department is.', 'He has too much work to prepare for the meeting .', 'He can\'t open the garage gate by himself.', 'He wasn\'t able to contact the parking attendant.', 'He can\'t open the garage gate by himself.'),
(163, 63, 'On Thursday', 'On Friday', 'On Monday', 'On Tuesday', 'On Tuesday'),
(164, 64, 'Find the parking attendant', 'Park in another garage', 'Arrive at the office early', 'Contact the HR department', 'Contact the HR department'),
(165, 65, 'At a shopping mall', 'At a hair salon', 'At a fashion boutique', 'At an art studio', 'At a hair salon'),
(166, 66, 'Meet the receptionist', 'Meet the receptionist', 'Find a new hair stylist', 'Change her hair color', 'Change her hair color'),
(167, 67, 'To see the sights', 'To learn about fashion', 'To buy hair products', 'To attend a training seminar', 'To attend a training seminar'),
(168, 68, 'He forgot his new password.', 'He left his ID card in the HR department', 'He can\'t access his messages.', 'His phone lines have been down all afternoon', 'He can\'t access his messages.'),
(169, 69, 'To the HR department', 'To technical services', 'To the reception desk', 'To the mail room', 'To technical services'),
(170, 70, 'Beside the reception desk', 'Next to the elevators', 'Across from the mail room', 'Near the HR department', 'Near the HR department'),
(171, 71, 'To get Mr. Clifford\'s contact information', 'To set up an installation date', 'To discuss available Internet packages', 'To receive payment for a service', 'To receive payment for a service'),
(172, 72, 'Send an e-mail', 'Call the company', 'Drop by the office', 'Register for services', 'Call the company'),
(173, 73, 'On Monday, between 8 and 6 o\'clock', 'As soon as possible', 'Before the installation date', 'After the payment due date', 'As soon as possible'),
(174, 74, 'A construction crew member', 'A steel engineer', 'A plant supervisor', 'A company\'s director', 'A company\'s director'),
(175, 75, '50', '75', '100', '125', '125'),
(176, 76, 'Milton', 'Portland', 'St. Louis', 'Rochester', 'Milton'),
(177, 77, 'A semi-conductor plant', 'A famous museum', 'A large bakery\'s facilities', 'A supermarket', 'A large bakery\'s facilities'),
(178, 78, 'The visitors will ask questions.', 'The guided pad of the tour will end.', 'The tasting rooms will close', 'The visitors can take photographs.', 'The guided pad of the tour will end.'),
(179, 79, '30 minutes', 'One hour', 'Two hours', 'Three hours', 'Two hours'),
(180, 80, 'A political candidate’s office', 'A university registrar’s office', 'City Hall in Washington. D.C.', 'A university library', 'A university library'),
(181, 81, '2 p.m.', '13 p.m.', '4 p.m', '5 p.m', '4 p.m'),
(182, 82, 'By accessing the list of faculty members', 'By speaking with the reception staff', 'By dialing extension 15', 'By visiting the library during regular hours', 'By dialing extension 15'),
(183, 83, 'A trip to France', 'A restaurant', 'A hotel', 'A food market', 'A restaurant'),
(184, 84, 'Fruit juice', 'Fresh fish', 'Pastries', 'A glass of wine', 'Pastries'),
(185, 85, 'The chef is world-renowned', 'It is open on weekends.', 'The view from the deck is impressive', 'The lunch specials are inexpensive.', 'The view from the deck is impressive'),
(186, 86, 'Employment opportunities with human resources', 'Information regarding interior decorating', 'Changes in the meeting schedules', 'Preparations for the board meeting', 'Information regarding interior decorating'),
(187, 87, 'By phoning the human resources department', 'By speaking to their manager', 'By visiting the lobby of the building', 'By contacting Newport Painters', 'By phoning the human resources department'),
(188, 88, 'Clean up their workspace', 'Turn off their computers', 'Contact the human resources department', 'Put away confidential files', 'Put away confidential files'),
(189, 89, 'To tell about special offers', 'To inform of a change in the store policy', 'To announce the store\'s hours', 'To introduce sales associates', 'To tell about special offers'),
(190, 90, 'Store manager', 'Computer programmer', 'Radio announcer', 'Restaurant staff', 'Store manager'),
(191, 91, 'A fax machine', 'Computer paper', 'A store catalogue', 'A preferred customer card', 'A store catalogue'),
(192, 92, 'This afternoon', 'In two weeks', 'At the end of the month', 'Next month', 'Next month'),
(193, 93, 'More efficient communication', 'Prevent the loss of files', 'Better secure important data', 'Allow staff to work less hours', 'More efficient communication'),
(194, 94, 'Obtain a new ID card', 'E-mail group files', 'Copy existing files', 'Rewrite files on the new server', 'Copy existing files'),
(195, 95, 'A day', 'Three days', 'A week', 'Three weeks', 'Three days'),
(196, 96, 'Management techniques', 'Organizational behavior', 'Tele-conferencing', 'Accounting', 'Organizational behavior'),
(197, 97, 'Raise questions on the lectures they ve heard', 'Post their responses on the conference website', 'Meet with their colleagues', 'Submit a paper to Francis Lee', 'Post their responses on the conference website'),
(198, 98, 'To introduce a new manager', 'To announce a new security system', 'To develop a new computer network', 'To address the issue of employee productivity', 'To announce a new security system'),
(199, 99, 'Across the country', 'Across the city', 'Within the IT department', 'Within the building', 'Within the building'),
(200, 100, 'Employees must now use a password.', 'Employees must now record their hours.', 'Employees must now use only their own computer', 'Employees must speak to their manager before using the computer.', 'Employees must now use a password.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bailam`
--
ALTER TABLE `bailam`
  ADD PRIMARY KEY (`IdBaiLam`,`IdUser`,`MaDe`),
  ADD KEY `fk_bailam_nguoidung1` (`IdUser`),
  ADD KEY `fk_bailam_dethi1` (`MaDe`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBinhLuan`),
  ADD KEY `fk_binhluan_nguoidung1` (`NguoiDang`),
  ADD KEY `fk_binhluan_dethi1` (`MaDe`);

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`MaCauHoi`),
  ADD KEY `fk_cauhoi_loaicauhoi1` (`LoaiCauHoi`),
  ADD KEY `fk_cauhoi_dethi1` (`MaDe`),
  ADD KEY `fk_cauhoi_nguoidung1` (`NguoiTao`),
  ADD KEY `STT` (`STT`);

--
-- Indexes for table `dethi`
--
ALTER TABLE `dethi`
  ADD PRIMARY KEY (`MaDe`),
  ADD UNIQUE KEY `TieuDe_UNIQUE` (`TieuDe`),
  ADD UNIQUE KEY `MP3_UNIQUE` (`MP3`),
  ADD KEY `fk_dethi_nguoidung` (`NguoiTao`);

--
-- Indexes for table `loaicauhoi`
--
ALTER TABLE `loaicauhoi`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`IdUser`),
  ADD UNIQUE KEY `Mail_UNIQUE` (`Mail`),
  ADD KEY `fk_nguoidung_quyen1` (`Quyen`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Indexes for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`MaThongBao`),
  ADD KEY `fk_thongbao_nguoidung1` (`NguoiTao`),
  ADD KEY `fk_thongbao_nguoidung2` (`NguoiNhan`),
  ADD KEY `fk_thongbao_nguoidung3` (`NhomNguoiNhan`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTinTuc`),
  ADD KEY `fk_tintuc_nguoidung1` (`NguoiTao`);

--
-- Indexes for table `traloi`
--
ALTER TABLE `traloi`
  ADD PRIMARY KEY (`MaCauHoi`),
  ADD KEY `fk_traloi_cauhoi2_idx` (`STT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bailam`
--
ALTER TABLE `bailam`
  MODIFY `IdBaiLam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBinhLuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `MaCauHoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `dethi`
--
ALTER TABLE `dethi`
  MODIFY `MaDe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `MaThongBao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `MaTinTuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bailam`
--
ALTER TABLE `bailam`
  ADD CONSTRAINT `fk_bailam_dethi1` FOREIGN KEY (`MaDe`) REFERENCES `dethi` (`MaDe`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bailam_nguoidung1` FOREIGN KEY (`IdUser`) REFERENCES `nguoidung` (`IdUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_binhluan_dethi1` FOREIGN KEY (`MaDe`) REFERENCES `dethi` (`MaDe`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_binhluan_nguoidung1` FOREIGN KEY (`NguoiDang`) REFERENCES `nguoidung` (`IdUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `fk_cauhoi_dethi1` FOREIGN KEY (`MaDe`) REFERENCES `dethi` (`MaDe`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cauhoi_loaicauhoi1` FOREIGN KEY (`LoaiCauHoi`) REFERENCES `loaicauhoi` (`MaLoai`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cauhoi_nguoidung1` FOREIGN KEY (`NguoiTao`) REFERENCES `nguoidung` (`IdUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dethi`
--
ALTER TABLE `dethi`
  ADD CONSTRAINT `fk_dethi_nguoidung` FOREIGN KEY (`NguoiTao`) REFERENCES `nguoidung` (`IdUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `fk_nguoidung_quyen1` FOREIGN KEY (`Quyen`) REFERENCES `quyen` (`MaQuyen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD CONSTRAINT `fk_thongbao_nguoidung1` FOREIGN KEY (`NguoiTao`) REFERENCES `nguoidung` (`IdUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_thongbao_nguoidung2` FOREIGN KEY (`NguoiNhan`) REFERENCES `nguoidung` (`IdUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_thongbao_nguoidung3` FOREIGN KEY (`NhomNguoiNhan`) REFERENCES `quyen` (`MaQuyen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `fk_tintuc_nguoidung1` FOREIGN KEY (`NguoiTao`) REFERENCES `nguoidung` (`IdUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `traloi`
--
ALTER TABLE `traloi`
  ADD CONSTRAINT `fk_traloi_cauhoi1` FOREIGN KEY (`MaCauHoi`) REFERENCES `cauhoi` (`MaCauHoi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_traloi_cauhoi2` FOREIGN KEY (`STT`) REFERENCES `cauhoi` (`STT`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
