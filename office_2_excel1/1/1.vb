Sub print1()
    MsgBox ("hello vba!")
End Sub

Sub hensu1()
Dim a, b, c As Integer
    a = 1
    b = 3
    c = a + b
    'MsgBox (c)
    ActiveCell.FormulaR1C1 = c
End Sub

Sub hensu2()
Dim d, e, f As String
    d = "1"
    e = "1"
    f = d + e
    MsgBox (f)
End Sub

Sub hensu3()
    Dim aa, bb, cc As Double
    aa = 3
    bb = 5
    cc = aa / bb
    MsgBox (cc)
End Sub

Sub connect1()
    Dim a, b, c As Integer
    a = Range("B5").Value
    b = Range("C5").Value
    c = a + b
    Range("D5").Select
    ActiveCell.FormulaR1C1 = c
End Sub