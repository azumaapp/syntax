Sub for1()
    'Array
    Dim a(5) As String 'a(0), a(1), ..., a(5)
    Dim b As Integer
    
    'for
    For i = 1 To 5
        a(i) = "Shinkansen" & i & " bansen"
    Next i
        
    b = Int(InputBox("1~5?"))
    MsgBox a(b)
End Sub

