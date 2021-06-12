Sub if1()
    Dim a, b, c, d As Integer
    a = Int(InputBox("a?", "Title"))
    b = Int(InputBox("b?", "Title"))
        
    If a > b Then
    Range("a1").Value = "a > bｪﾇｪｹ｡｣"
    ElseIf b > a Then
    Range("a1").Value = "b > aｪﾇｪｹ｡｣"
    Else
    Range("a1").Value = "a = bｪﾇｪｹ｡｣"
    End If
End Sub

