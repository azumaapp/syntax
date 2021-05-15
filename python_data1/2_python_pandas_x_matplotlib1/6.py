# pandas x matplotlib

# 1. matplotlib의 기본 기능 복습
# import
import matplotlib.pyplot as plt
# x, y label
plt.xlabel('Numbers')
plt.ylabel('Counting')
# main title
plt.title('Practice Plot')
# x, y value
x1=[1,2,3]
y1=[6,4,8]
x2=[1,2,3]
y2=[4,14,1]
# plot
plt.plot(x1,y1, label='First')
plt.plot(x2,y2, label='Second')
# legned(), show()
plt.legend() # 레전드(범례)를 보여줌
plt.show()