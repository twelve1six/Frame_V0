<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<style type="text/css">
			body {
				font-size: 12px;
			}
			ul {
				padding-left: 10px;
			}
			li {
				list-style: none;
				padding-top: 5px;
			}
			.wraper {
				width: 1156px;
			}
			.navigation {
				float: left;
				width: 150px;
				height: 602px;
				border: 1px solid black;
			}
			.report {
				float: left;
				width: 500px;
				height: 602px;
				border: 1px solid green;
			}
			.image {
				float: right;
				width: 500px;
				height: 400px;
				border: 1px solid blue;
			}
			.comment {
				float: right;
				width: 500px;
				height: 200px;
				border: 1px solid blue;
			}
			.footer {
				clear: both;
				border: 1px solid purple;
				height: 20px;
			}
		</style>
	</head>
	<body>
		<div class="wraper">
			<div class="navigation">
				<ul>
					병원별 요청 레포트
					<li>
						</br>병원A
						<?php header("Content-Type: text/html; charset=utf-8");
							$serverName = "192.168.0.20,1433";
							//기본 포트port 1433
							$DB_USERID = "sa";
							$DB_USERPW = "h890910)";
							$DB_NAME = "PHP_test3";

							try {
								// MySQL PDO 객체 생성
								// mysql을 다른 DB로 변경하면 다른 DB도 사용 가능
								$pdo = new PDO("sqlsrv:Server=$serverName;Database=$DB_NAME", $DB_USERID, $DB_USERPW);
								// 에러 출력
								$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							} catch (Exception $e) {
								echo $e -> getMessage();
							}
							$retval = null;
							$hname = 'A';

							//have to make a variable to save return value.(retval)

							$stmt = $pdo -> prepare("EXEC :retval = dbo.sp_test :hname");
							$stmt -> bindParam(':retval', $retval, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4);
							$stmt -> bindParam(':hname', $hname);
							$stmt -> execute();

							/*
							 *simply excute sp cannot get a return value.
							 *After 2 nextRowset, can get a return value.
							 *Reference: http://social.msdn.microsoft.com/Forums/sqlserver/en-US/aac57e8a-4232-45b1-98c6-83491fc7c49d/pdosqlsrv-having-problems-with-store-procedure-output-parameters-and-recordset?forum=sqldriverforphp
							 */

							$stmt -> nextRowset();

							echo ": " . $retval;

							unset($pdo);
							unset($stmt);
						?>
					<li>
						병원B
						<?php header("Content-Type: text/html; charset=utf-8");
							$serverName = "192.168.0.20,1433";
							//기본 포트port 1433
							$DB_USERID = "sa";
							$DB_USERPW = "h890910)";
							$DB_NAME = "PHP_test3";

							try {
								// MySQL PDO 객체 생성
								// mysql을 다른 DB로 변경하면 다른 DB도 사용 가능
								$pdo = new PDO("sqlsrv:Server=$serverName;Database=$DB_NAME", $DB_USERID, $DB_USERPW);
								// 에러 출력
								$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							} catch (Exception $e) {
								echo $e -> getMessage();
							}
							$retval = null;
							$hname = 'B';

							//have to make a variable to save return value.(retval)

							$stmt = $pdo -> prepare("EXEC :retval = dbo.sp_test :hname");
							$stmt -> bindParam(':retval', $retval, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4);
							$stmt -> bindParam(':hname', $hname);
							$stmt -> execute();

							/*
							 *simply excute sp cannot get a return value.
							 *After 2 nextRowset, can get a return value.
							 *Reference: http://social.msdn.microsoft.com/Forums/sqlserver/en-US/aac57e8a-4232-45b1-98c6-83491fc7c49d/pdosqlsrv-having-problems-with-store-procedure-output-parameters-and-recordset?forum=sqldriverforphp
							 */

							$stmt -> nextRowset();

							echo ": " . $retval;

							unset($pdo);
							unset($stmt);
						?>
					</li>
					<li>
						병원C
						<?php header("Content-Type: text/html; charset=utf-8");
							$serverName = "192.168.0.20,1433";
							//기본 포트port 1433
							$DB_USERID = "sa";
							$DB_USERPW = "h890910)";
							$DB_NAME = "PHP_test3";

							try {
								// MySQL PDO 객체 생성
								// mysql을 다른 DB로 변경하면 다른 DB도 사용 가능
								$pdo = new PDO("sqlsrv:Server=$serverName;Database=$DB_NAME", $DB_USERID, $DB_USERPW);
								// 에러 출력
								$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							} catch (Exception $e) {
								echo $e -> getMessage();
							}
							$retval = null;
							$hname = 'C';

							//have to make a variable to save return value.(retval)

							$stmt = $pdo -> prepare("EXEC :retval = dbo.sp_test :hname");
							$stmt -> bindParam(':retval', $retval, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4);
							$stmt -> bindParam(':hname', $hname);
							$stmt -> execute();

							/*
							 *simply excute sp cannot get a return value.
							 *After 2 nextRowset, can get a return value.
							 *Reference: http://social.msdn.microsoft.com/Forums/sqlserver/en-US/aac57e8a-4232-45b1-98c6-83491fc7c49d/pdosqlsrv-having-problems-with-store-procedure-output-parameters-and-recordset?forum=sqldriverforphp
							 */

							$stmt -> nextRowset();

							echo ": " . $retval;

							unset($pdo);
							unset($stmt);
						?>
					</li>
					<li>
						병원D
						<?php header("Content-Type: text/html; charset=utf-8");
							$serverName = "192.168.0.20,1433";
							//기본 포트port 1433
							$DB_USERID = "sa";
							$DB_USERPW = "h890910)";
							$DB_NAME = "PHP_test3";

							try {
								// MySQL PDO 객체 생성
								// mysql을 다른 DB로 변경하면 다른 DB도 사용 가능
								$pdo = new PDO("sqlsrv:Server=$serverName;Database=$DB_NAME", $DB_USERID, $DB_USERPW);
								// 에러 출력
								$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							} catch (Exception $e) {
								echo $e -> getMessage();
							}
							$retval = null;
							$hname = 'D';

							//have to make a variable to save return value.(retval)

							$stmt = $pdo -> prepare("EXEC :retval = dbo.sp_test :hname");
							$stmt -> bindParam(':retval', $retval, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4);
							$stmt -> bindParam(':hname', $hname);
							$stmt -> execute();

							/*
							 *simply excute sp cannot get a return value.
							 *After 2 nextRowset, can get a return value.
							 *Reference: http://social.msdn.microsoft.com/Forums/sqlserver/en-US/aac57e8a-4232-45b1-98c6-83491fc7c49d/pdosqlsrv-having-problems-with-store-procedure-output-parameters-and-recordset?forum=sqldriverforphp
							 */

							$stmt -> nextRowset();

							echo ": " . $retval;

							unset($pdo);
							unset($stmt);
						?>
					</li>
				</ul>
			</div>
			<div class="report">
				<ul>
					REPORT
				</ul>
				<img src="./Report_sample.jpg" width="500"/>
			</div>
			<div class="image">
				<ul>
					IMAGE
				</ul>
				<?php //header("Content-Type: text/html; charset=utf-8");
				//기본 포트port 1433
				$serverName = "192.168.0.20,1433";

				//USER & DB info
				$DB_USERID = "sa";
				$DB_USERPW = "h890910)";
				$DB_NAME = "PHP_test3";

				//$dbh = new PDO('sqlsrv:192.168.0.20,1433', $DB_USERID, $DB_USERPW, array('Database' => "SAFE"));
				try {
					// MySQL PDO 객체 생성
					// mysql을 다른 DB로 변경하면 다른 DB도 사용 가능
					$pdo = new PDO("sqlsrv:Server=$serverName;Database=$DB_NAME", $DB_USERID, $DB_USERPW);
					// 에러 출력
					$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch (Exception $e) {
					echo $e -> getMessage();
				}

				try {
					$stmt2 = $pdo -> prepare("SELECT fcode FROM TEST WHERE id = 14");
					$stmt2 -> execute();
					$stmt2 -> bindColumn(1, $fcode, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
					$row = $stmt2 -> fetch(PDO::FETCH_ASSOC);

					if ($row) {

						$b64image = base64_encode($row['fcode']);
						$type = 'image/jpeg';
						echo '<img src="data:' . $type . ';base64,' . $b64image . '" width = "500" />';

					}

				} catch(PDOException $e) {
					echo $e -> getMessage();
				}
				?>
			</div>
			<div class="comment">
				<ul>
					COMMENT
				</ul>
				<form action="./proto1.php" method="POST">
					<textarea rows="7" cols="67" align="right" name="comment"><?php 
					$serverName = "192.168.0.20,1433";
					//기본 포트port 1433
					$DB_USERID = "sa";
					$DB_USERPW = "h890910)";
					$DB_NAME = "PHP_test3";

					try {
						// MySQL PDO 객체 생성
						// mysql을 다른 DB로 변경하면 다른 DB도 사용 가능
						$pdo = new PDO("sqlsrv:Server=$serverName;Database=$DB_NAME", $DB_USERID, $DB_USERPW);
						// 에러 출력
						$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					} catch (Exception $e) {
						echo $e -> getMessage();
					}			
					if($_POST['comment']!=null) {
					try {
							$stmt4 = $pdo -> prepare("UPDATE PHP_test3.dbo.TEST SET comment = :comment WHERE id = 14");

							//$stmt2 -> bindParam(':id', 3);
							$stmt4 -> bindParam(':comment', $_POST['comment']);
							$stmt4 -> execute();

						} catch(PDOException $e) {
							echo $e -> getMessage();
					}
					}
					try {
						$stmt3 = $pdo -> prepare("SELECT comment FROM TEST WHERE id = 14");
						$stmt3 -> execute();
						$row = $stmt3 -> fetch(PDO::FETCH_ASSOC);
						
						echo $row['comment'];
					} catch(PDOException $e) {
						echo $e -> getMessage();
					}					

				?></textarea>
					<br />
					<input type="submit" value="save" right="100px"/>
				</form>

			</div>
			<div class="footer">
				FOOTER
			</div>
		</div>
	</body>
</html>