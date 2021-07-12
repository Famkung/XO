** วิธีการติดตั้ง **
1. ให้เเตกไฟล์ XO 
2. หลังจากแตกไฟล์ออกมาเเล้ว ให้นำไฟล์ XO ไปไว้ใน server คุณใน folder ชื่อ  htdocs (** กรณีนี้ผมอ้างถึงคนที่ใช้ xampp **)
3. ทำให้การรันโปรแกรม xampp เเล้วรัน server โดยให้ start ในเมนู Apache เเละ MySQL
4. ให้ไปที่ link : http://127.0.0.1/phpmyadmin/  (เเนะนำให้เปิดใน GoogleChome)
5. ไปที่เมนู Import เเล้วเลือกไฟล์ Server.sql เพื่อเป็นการสร้างฐานข้อมูลไว้รับค่า
6. เมื่อทำทุกอย่างเรียบร้อยเเล้ว ให้ไปที่ link : http://127.0.0.1/XO/game.php (เเนะนำให้เปิดใน GoogleChome)
7. เริ่มใช้งานได้เลย
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
** วิธีออกแบบโปรแกรมและ algorithm ที่ใช้ **
	เริ่มเเรกจะเป็นการให้ผู้ใช้งานระบุขนาดของบอร์ดเกมส์ก่อนเพื่อที่จะนำไปสร้างเป็นปุ่มขึ้นมา เเล้วในปุ่มจะทำการกำหนด value ให้เป็นค่าว่างทุกปุ่ม  
เเล้วเมื่อผู้เล่นได้กดปุ่มไปเเล้วจะทำการกำหนดค่าให้ปุ่มนั้น โดยจะกำหนดค่าผ่าน javascript ในการกดครั้งเเรกระบบจะให้ผู้เล่นคนนั้นเป็น Player X เสมอ เมื่อผู้เล่นคนต่อไป
มากดระบบจะทำการให้ผู้เล่นคนนั้นเป็น Player O โดยในเงื่อนไขจะมีการตรวจสอบค่า ถ้าก่อนหน้านี้่ผู้เล่นคนก่อนหน้าเป็น X ก็จะให้ผู้เล่นคนถัดไปเป็น O เพราะเนื่องจากเกมส์
เกมส์ XO ผู้เล่นต้องสลับกันอยู่เเล้ว ในระหว่างการกดในเเต่ละปุ่มนั้นจะมีการส่งค่าไปเก็บที่ database  โดยจะเก็บค่า step , position เเละ  value ของปุ่ม  (step คือ เก็บลำดับการเล่น)
	ในส่วนของระบบ replay จะเป็นการสร้างปุ่มขึ้นมาเพื่อให้เป็นค่าว่างก่อน เเล้วก็จะสร้างปุ่ม step ขึ้นมา ซึ่งในปุ่ม step แต่ละปุ่มจะมีการเก็บค่า replay ไว้ คือ ทำการเอาข้อมูล
มาจาก database มาเก็บไว้ในปุ่มเป็นลำดับ โดยถ้าเรากดปุ่มในปุ่มจะมี Function ที่ใช้กำหนด value ให้กับปุ่มต่างๆตามค่าข้อมูลที่ปุ่มได้รับไว้ "อันนี้ผมพูดอาจจะไม่เห็นภาพเเนะนำให้ลองเปิดโปรแกรมขึ้นมา
ใช้งานดูครับ ผมไม่รู้จะอธิบายยังไง ขออภัยด้วยครับ "