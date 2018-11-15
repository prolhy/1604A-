import java.util.ArrayList;
public class Solution{
    public ArrayList<Integer>FindNnmbersWithSum(int[]array,int sum){
      ArrayList</Integer> list=new  ArrayList</Integer>;
        if(array.length<2||array==null){
           return list;
        }
    }
    int len=array.length;
    int start=0;
    int end=len-1;
    while(start < end && start < len -1 && end > 0){
       if(array[start] + array[send] == sum){
         list.add(array[start]);
         list.add(array[end]);
         return list;
       }
        if(array[start] + array[send] > sum){
          end--;
        }
        if(array[start] + array[send] < sum){
          start++;
        }
      return list;
    }
}